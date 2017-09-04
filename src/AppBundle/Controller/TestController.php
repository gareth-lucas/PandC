<?php
namespace AppBundle\Controller;

use AppBundle\Entity\Image;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Form\ImageType;

class TestController extends Controller
{

    /**
     * @Route("/test/image/{filepath}", name="test_image")
     */
    public function imageAction(Request $request, $filepath = null)
    {
        $em = $this->getDoctrine()->getManager();
        
        $images = $em->getRepository(Image::class)->findAll();
        
        $image = new Image();
        
        if ($filepath) {
            $image = $em->getRepository(Image::class)->findOneByImageFilepath($filepath);
        }
        
        $form = $this->createForm(ImageType::class, $image);
        
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()) {
            $image = $form->getData();
            $em->persist($image);
            $em->flush();
            
            return $this->redirectToRoute("test_image");
        }
        
        return $this->render('AppBundle:Test:image.html.twig', array(
            'images'=>$images,
            'image'=>$image,
            'form'=>$form->createView()
        ));
    }
}
