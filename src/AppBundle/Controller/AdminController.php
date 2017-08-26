<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Ingredient;
use AppBundle\Form\IngredientType;
use AppBundle\Entity\ImageCollection;
use AppBundle\Entity\Image;
use AppBundle\Form\ImageCollectionType;
use AppBundle\Entity\HomepageSettings;
use AppBundle\Form\HomepageSettingsType;
use AppBundle\Form\RecipeType;
use AppBundle\Service\FileUploader;
use AppBundle\Entity\Recipe;
use Symfony\Component\HttpFoundation\File\Exception\UploadException;
use AppBundle\Entity\RecipeStepCollection;
use AppBundle\Entity\RecipeStep;
use AppBundle\Entity\UnitOfMeasure;
use AppBundle\Form\UnitOfMeasureType;
use AppBundle\Entity\Preparation;
use AppBundle\Form\PreparationType;
use AppBundle\Entity\MealType;
use AppBundle\Form\MealTypeType;

// have to do this...
class AdminController extends Controller
{

    /**
     * @Route("/admin/ingredient/{slug}", name="admin_ingredient")
     */
    public function ingredientAction(Request $request, FileUploader $fileUploader, $slug = null)
    {
        $em = $this->getDoctrine()->getManager();
        $ingredients = $em->getRepository(Ingredient::class)->findBy([], [
            "name" => "ASC"
        ]);
        
        $ingredient = new Ingredient();
        $isNew = true;
        if ($slug) {
            $ingredient = $em->getRepository(Ingredient::class)->findOneBySlug($slug);
            $isNew = false;
        }
        
        $form = $this->createForm(IngredientType::class, $ingredient);
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $ingredient = $form->getData();
            foreach ($ingredient->getImageCollection()->getImages() as $image) {
                $file = $image->getImage();
                $image->setImageFormat($file->guessExtension());
                $image->setImageSize($file->getSize());
                try {
                    $filename = $fileUploader->upload($file);
                } catch (UploadException $em) {
                    die($em->getMessage());
                }
                $image->setImageFilepath($filename);
            }
            if (count($ingredient->getImageCollection()->getImages()) == 0) {
                $ingredient->setImageCollection(null);
            }
            $em->persist($ingredient);
            $em->flush();
            
            return $this->redirectToRoute("admin_ingredient");
        }
        
        return $this->render('AppBundle:Admin:ingredient.html.twig', array(
            'ingredients' => $ingredients,
            'isNew'=>$isNew,
            'form' => $form->createView()
        ));
    }


    /**
     * @Route("/admin/homepage", name="admin_homepage")
     *
     * @param Request $request
     */
    public function homepageAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        if (! $homepageSettings = $em->getRepository(HomepageSettings::class)->findBy([], [
            "timestamp" => "DESC"
        ], 1)) {
            $homepageSettings = new HomepageSettings();
        }
        
        $form = $this->createForm(HomepageSettingsType::class, $homepageSettings);
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $homepageSettings->setTimestamp(new \DateTime());
            $homepageSettings->setUser($this->getUser()
                ->getUsername());
            $homepageSettings->persist();
            $homepageSettings->flush();
            // this is a test
            
            return $this->redirectToRoute("admin_homepage");
        }
        
        return $this->render('AppBundle:Admin:homepage.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /**
     * @Route("/admin/recipe/{slug}", name="admin_recipe")
     *
     * @param Request $request
     */
    public function recipeAction(Request $request, FileUploader $fileUploader, $slug = null)
    {
        $em = $this->getDoctrine()->getManager();
        $recipes = $em->getRepository(Recipe::class)->findBy([], [
            "title" => "ASC"
        ]);
        
        $recipe = new Recipe();
        $isNew = true;
        if ($slug) {
            $recipe = $em->getRepository(Recipe::class)->findOneBySlug($slug);
            $isNew = false;
        }
        
        $form = $this->createForm(RecipeType::class, $recipe);
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $recipe = $form->getData();
            $recipe->setCreationDate(new \DateTime());
            $recipe->setUploadedBy("Admin");
            
            foreach ($recipe->getRecipeStepCollection()->getRecipeSteps() as $rs) {
                if (count($rs->getImageCollection()->getImages()) == 0) {
                    $rs->setImageCollection(null);
                }
            }
            
            if (count($recipe->getImageCollection()->getImages()) == 0) {
                $recipe->setImageCollection(null);
            }
            
            foreach ($recipe->getImageCollection()->getImages() as $image) {
                $file = $image->getImage();
                $image->setImageFormat($file->guessExtension());
                $image->setImageSize($file->getSize());
                try {
                    $filename = $fileUploader->upload($file);
                } catch (UploadException $em) {
                    die($em->getMessage());
                }
                $image->setImageFilepath($filename);
            }
            $em = $this->getDoctrine()->getManager();
            $em->persist($recipe);
            $em->flush();
            
            return $this->redirectToRoute("admin_recipe");
        }
        
        return $this->render('AppBundle:Admin:recipe.html.twig', array(
            'recipes' => $recipes,
            'form' => $form->createView(),
            'isNew' => $isNew
        ));
    }

    /**
     * @Route("/admin/uom/{slug}", name="admin_uom")
     *
     * @param Request $request
     */
    public function uomAction(Request $request, $slug = null)
    {
        $em = $this->getDoctrine()->getManager();
        
        $uoms = $em->getRepository(UnitOfMeasure::class)->findBy([], [
            "name" => "ASC"
        ]);
        
        $isNew = true;
        $uom = new UnitOfMeasure();
        if ($slug) {
            $uom = $em->getRepository(UnitOfMeasure::class)->findOneBySlug($slug);
            $isNew = false;
        }
        
        $form = $this->createForm(UnitOfMeasureType::class, $uom);
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $uom = $form->getData();
            $em->persist($uom);
            $em->flush();
            
            return $this->redirectToRoute("admin_uom");
        }
        
        return $this->render('AppBundle:Admin:uom.html.twig', array(
            'form' => $form->createView(),
            'uom' => $uoms,
            'isNew' => $isNew
        ));
    }

    /**
     * @Route("/admin/preparation/{slug}", name="admin_preparation")
     *
     * @param Request $request
     */
    public function preparationAction(Request $request, $slug = null)
    {
        $em = $this->getDoctrine()->getManager();
        
        $preparations = $em->getRepository(Preparation::class)->findBy([], [
            "name" => "ASC"
        ]);
        
        $isNew = true;
        $preparation = new Preparation();
        if ($slug) {
            $preparation = $em->getRepository(Preparation::class)->findOneBySlug($slug);
            $isNew = false;
        }
        
        $form = $this->createForm(PreparationType::class, $preparation);
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $preparation = $form->getData();
            $em->persist($preparation);
            $em->flush();
            
            return $this->redirectToRoute("admin_preparation");
        }
        
        return $this->render('AppBundle:Admin:preparation.html.twig', array(
            'form' => $form->createView(),
            'preparations' => $preparations,
            'isNew' => $isNew
        ));
    }

    /**
     * @Route("/admin/mealtype/{slug}", name="admin_mealtype")
     *
     * @param Request $request
     */
    public function mealtypeAction(Request $request, $slug = null)
    {
        $em = $this->getDoctrine()->getManager();
        
        $mealtypes = $em->getRepository(MealType::class)->findBy([], [
            "name" => "ASC"
        ]);
        
        $isNew = true;
        $mealtype = new MealType();
        if ($slug) {
            $mealtype = $em->getRepository(MealType::class)->findOneBySlug($slug);
            $isNew = false;
        }
        
        $form = $this->createForm(MealTypeType::class, $mealtype);
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $mealtype = $form->getData();
            $em->persist($mealtype);
            $em->flush();
            
            return $this->redirectToRoute("admin_mealtype");
        }
        
        return $this->render('AppBundle:Admin:mealtype2.html.twig', array(
            'form' => $form->createView(),
            'mealtypes' => $mealtypes,
            'isNew' => $isNew
        ));
    }
}
