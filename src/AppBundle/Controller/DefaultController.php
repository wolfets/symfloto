<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use AppBundle\Entity\ArticleRepository;
use AppBundle\Entity\Article;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     * @Route("/{id}")
     * @Route("/app/example", name="homepage")
     * @Template()
     */
    public function indexAction($id = '')
    {
//     	$em = $this->getDoctrine ()->getManager ();
//     	//$entity = $em->getRepository ( 'StdBlogBundle:Article' )->find ( $id );
//     	$articles = $em->getRepository('AppBundle:Article')->findAll();
    	
    	
    	$articles = array(
    			array('titre'=>"article 1", 'contenu'=>"blablabla"),
    			array('titre'=>"article 2", 'contenu'=>"nanani"),
    			array('titre'=>"article 3", 'contenu'=>"lalala")
    			);
    	
    	//$em = $this->getDoctrine()->getManagers()->getRepository('AppBundle:Article');
    				
         return $this->render('default/index.html.twig', array('hello'=>'Bonjour....', 'id'=>$id, 'articles'=>$articles));
    	//return array('hello'=>'Bonjour....', 'id'=>$id, 'articles'=>$articles);
    	 
    }
}
