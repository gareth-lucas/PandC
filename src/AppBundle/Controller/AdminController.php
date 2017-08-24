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
use AppBundle\Entity\Recipe;

// have to do this...

class AdminController extends Controller
{

    /**
     * @Route("/admin/ingredient", name="admin_ingredient")
     */
    public function ingredientAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $ingredients = $em->getRepository(Ingredient::class)->findBy([], [
            "name" => "ASC"
        ]);
        
        $ingredient = new Ingredient();
        $ic = new ImageCollection();
        $ic->addImage(new Image());
        $ingredient->setImageCollection($ic);
        
        $form = $this->createForm(IngredientType::class, $ingredient);
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $ingredient = $form->getData();
            foreach ($ingredient->getImageCollection()->getImages() as $image) {
                $image->setImageFormat("jpg");
                $image->setImageSize("100");
                $image->setImageFilepath("/here/there/everywhere/file.jpg");
            }
            $em->persist($ingredient);
            $em->flush();
            
            return $this->redirectToRoute("admin_ingredient");
        }
        
        return $this->render('AppBundle:Admin:ingredient.html.twig', array(
            'ingredients' => $ingredients,
            'form' => $form->createView()
        ));
    }

    // this method to be deleted...
    /**
     * @Route("/admin/test", name="admin_test")
     */
    public function icAction(Request $request)
    {
        $ic = new ImageCollection();
        $form = $this->createForm(ImageCollectionType::class, $ic);
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $imageCollection = $form->getData();
            foreach ($imageCollection->getImages() as $image) {
                $image->setImageFormat("jpg");
                $image->setImageSize("100");
                $image->setImageFilepath("/here/there/everywhere/file.jpg");
            }
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($imageCollection);
            $em->flush();
            
            return $this->redirectToRoute("admin_test");
        }
        
        return $this->render('AppBundle:Admin:imagecollection.html.twig', array(
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
     * @Route("/admin/recipe", name="admin_recipe")
     * 
     * @param Request $request
     */
    public function recipeAction(Request $request)
    {
        $form = $this->createForm(RecipeType::class, new Recipe());
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $recipe = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($recipe);
            
            return $this->redirectToRoute("admin_recipe");
        }
        
        return $this->render('AppBundle:Admin:recipe.html.twig', array(
            'form' => $form->createView()
        ));
    }
}
