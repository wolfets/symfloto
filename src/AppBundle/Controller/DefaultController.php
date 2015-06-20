<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

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
    	
        return $this->render('default/index.html.twig', array('hello'=>'Bonjour....', 'id'=>$id));
    }
}
