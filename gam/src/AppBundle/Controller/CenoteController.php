<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use BackendBundle\Entity\Cenote;
use AppBundle\Form\CenoteType;

class CenoteController extends Controller {

    private $session;

    public function __construct() {
        $this->session = new Session();
    }

    public function indexAction() {
        return $this->render('AppBundle:Cenote:home.html.twig');
    }

    public function newCenoteAction(Request $request) {

        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $cenote = new Cenote();
        $form = $this->createForm(CenoteType::class, $cenote);

        //unir la request al objeto que esta vinculado al form
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            if ($form->isValid()) {

                //upload-image
                $file = $form['image']->getData();
                if (!empty($file) && $file != null) {
                    $ext = $file->guessExtension();
                    if ($ext == 'jpg' || $ext == 'jpeg' || $ext == 'png' || $ext == 'gif') {
                        $file_name = $user->getId() . $user->getName() . time() . "." . $ext;
                        $file->move("uploads/cenotes/images", $file_name);
                        $cenote->setImage($file_name);
                    } else {
                        $cenote->setImage(null);
                    }
                } else {
                    $cenote->setImage(null);
                }

                $cenote->setUser($user);
                //$createdAt = new \Datetime('now');
                $cenote->setCreatedAt(new \Datetime("now"));
                $em->persist($cenote);
                $flush = $em->flush();

                if ($flush == null) {
                    $status = 'El registro se ha creado correctamente';
                } else {
                    $status = 'Error al intentar hacer el registro';
                }
            } else {
                $status = 'El registro no se ha creado, porque el formulario no es valido.';
            }
            $this->session->getFlashBag()->add("status", $status);
            return $this->redirectToRoute('new_cenote');
        }
        return $this->render('AppBundle:Cenote:new_cenote.html.twig', array(
                    'form' => $form->createView()
        ));
    }

}
