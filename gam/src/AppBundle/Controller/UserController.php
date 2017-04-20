<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use BackendBundle\Entity\User;
use AppBundle\Form\RegisterType;

class UserController extends Controller {
    /* sesion y constructor para crear mensajes flag */

    private $session;

    public function __construct() {
        $this->session = new Session();
    }

    public function loginAction(Request $request) {

        return $this->render('AppBundle:User:login.html.twig', array(
                    "titulo" => "login"
        ));
    }

    public function registerAction(Request $request) {
        $user = new User();
        $form = $this->createForm(RegisterType::class, $user);

        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                //$user_repo = $em->getRepository("BackendBundle:User");
                $query = $em->createQuery('SELECT u FROM BackendBundle:User u WHERE u.email = :email')
                        ->setParameter('email', $form->get("email")->getData());
                $user_isset = $query->getResult();
                if (count($user_isset) == 0) {
                    //si no existe el usuario, creamos el usuario
                    //lo primero es codificar la contraseña 
                    $factory = $this->get("security.encoder_factory");
                    //hacemos variable encoder y sacamos el encoder de usuario
                    $encoder = $factory->getEncoder($user);
                    //password usa el objeto encoder y le pasamos el valor que nos llega del fomr
                    $password = $encoder->encodePassword($form->get("password")->getData(), $user->getSalt());

                    //algunos datos nos llegan del form se guardan en la variable $user
                    //pero los que no los seteamos
                    $user->setPassword($password);
                    $user->setRole("ROLE_USER");
                    $user->setImage(null);
                    //persistir datos en doctrine
                    $em->persist($user);
                    $flush = $em->flush();

                    if ($flush == null) {
                        $status = "Te has registrado correctamente";
                        $this->session->getFlashBag()->add("status", $status);

                        return $this->redirect("login");
                    } else {
                        $status = "No te has registrado correctamente";
                    }
                } else {
                    $status = "Este correo ya está registrado";
                }
            } else {
                $status = "No te has registrado correctamente";
            }
            /*mensaje flash*/
            $this->session->getFlashBag()->add("status", $status);
        }

        return $this->render('AppBundle:User:register.html.twig', array(
                    "form" => $form->createView()
        ));
    }

}
