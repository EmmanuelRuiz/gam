<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use BackendBundle\Entity\Cenote;
use AppBundle\Form\CenoteType;

class CenoteController extends Controller {

    public function indexAction() {

        
        
        return $this->render('AppBundle:Cenote:home.html.twig');
    }
    
    public function newCenoteAction() {

        $em = $this->getDoctrine()->getManager();
        $cenote = new  Cenote();
        $form = $this->createForm(CenoteType::class, $cenote);
        
        return $this->render('AppBundle:Cenote:new_cenote.html.twig', array(
            'form' => $form->createView()
        ));
    }

}
