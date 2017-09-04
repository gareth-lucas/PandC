<?php
namespace AppBundle\Controller;

use AppBundle\Entity\Recipe;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\HomepageSettings;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class DefaultController extends Controller
{

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $homepageParams = $em->getRepository(HomepageSettings::class)->findAll([], [
            'timestamp' => "DESC"
        ], 1);
        
        if (! $homepageParams) {
            $homepageParams = new HomepageSettings();
        }
        
        if ($homepageParams->getMainRecipeUseLatest()) {
            // main recipe uses latest recipe...
            $mainRecipe = $em->getRepository(Recipe::class)->findBy([], [
                "creationDate" => "DESC"
            ], 1)[0];
            $mainImage = "";
            
            $imageCollection = $mainRecipe->getImageCollection();

            if ($imageCollection) {
                $images = $imageCollection->getImages();
                $mainImage = $this->getParameter("web_upload_directory")."/".$images[0]->getImageFilepath() . "/banner.jpg";
            }
        }
        
        if ($homepageParams->getFeatureRecipesUseLatest()) {
            // featured recipes use latest...
            $featuredRecipes = $em->getRepository(Recipe::class)->findBy([], [
                "creationDate" => "DESC"
            ], 4);
            
            $featuredImages = [];
            foreach($featuredRecipes as $recipe) {
                if($recipe->getImageCollection()) {
                    $featuredImages[] = $recipe->getimageCollection()->getimages()[0]->getImageFilepath();
                }
            }
        }        
        
        // replace this example code with whatever you need
        return $this->render('AppBundle:Default:index.html.twig', [
            'mainRecipe' => $mainRecipe,
            'mainImage' => $mainImage,
            'featuredRecipes' => $featuredRecipes,
            'featuredImages' => $featuredImages
        ]);
    }
    
    /**
     * @Route("/recipe/list", name="recipe_list")
     */
    public function recipeListAction() {
        $em = $this->getDoctrine()->getManager();
        $recipes = $em->getRepository(Recipe::class)->findBy([], ["title"=>"ASC"]);
        
        return $this->render('default/recipelist.html.twig', [
            'recipes'=>$recipes
        ]);
    }
    
    
    /**
     * @Route("/recipe/{slug}", name="recipe")
     */
    public function recipeAction(Request $request, $slug) {
        
        throw new NotFoundHttpException("NOTE: This page has not yet been implemented");
    }
    
    /**
     * @Route("/ingredient/{slug}", name="ingredient")
     */
    public function ingredientAction(Request $request, $slug) {
        
        throw new NotFoundHttpException("NOTE: This page has not yet been implemented");
    }
}
