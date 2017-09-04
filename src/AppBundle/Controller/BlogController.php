<?php
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Blog;
use AppBundle\Form\BlogType;

class BlogController extends Controller
{

    /**
     * @Route("/admin/blog/{slug}", name="blog_admin")
     */
    public function adminAction(Request $request, $slug = null)
    {
        $em = $this->getDoctrine()->getManager();
        $blogs = $em->getRepository(Blog::class)->findBy([], ["creationDate"=>"DESC"]);
        
        $blog = new Blog();
        $isNew = true;
        if($slug) {
            if(!$blog = $em->getRepository(Blog::class)->findOneBySlug($slug)) {
                return $this->redirectToRoute("blog_admin");
            }
            $isNew = false;
        }
        
        
        $form = $this->createForm(BlogType::class, $blog);
        
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()) {
            $blog = $form->getData();
            $blog->setCreationDate(new \DateTime());
            $em->persist($blog);
            $em->flush();
            
            return $this->redirectToRoute("blog_admin");
        }
        
        
        return $this->render('AppBundle:Blog:admin.html.twig', array(
            'blogs' => $blogs,
            'form'=>$form->createView(),
            'isNew'=>$isNew,
            'blog'=>$blog
        ));
    }

    /**
     * @Route("/blog/{slug}")
     */
    public function readAction($slug)
    {
        return $this->render('AppBundle:Blog:read.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/blog/comment/{slug}")
     */
    public function commentAction($slug)
    {
        return $this->render('AppBundle:Blog:comment.html.twig', array(
            // ...
        ));
    }
}
