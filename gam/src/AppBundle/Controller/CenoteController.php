<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CenoteController extends Controller {

    public function indexAction() {

        return $this->render('AppBundle:Cenote:home.html.twig');
    }

}
