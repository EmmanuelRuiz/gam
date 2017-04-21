<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use BackendBundle\Entity\User;
use AppBundle\Form\RegisterType;

class UserController extends Controller {
    /* sesion y constructor para crear mensajes flash */

    private $session;

    public function __construct() {
        $this->session = new Session();
    }

    public function loginAction(Request $request) {
        //redirección si ya estamos logueados
        if(is_object($this->getUser())){
            return $this->redirect('home');
        }
        
        //cargar servicio de autenticacion
        $authenticationUtils = $this->get('security.authentication_utils');
        //si el login falla conseguimos el error con esto
        $error = $authenticationUtils->getLastAuthenticationError();
        //sacar el usuario que probo loguearse pero no pudo
        $lastUsername = $authenticationUtils->getLastUsername();
        return $this->render('AppBundle:User:login.html.twig', array(
                    'last_username' => $lastUsername,
                    'error' => $error
        ));
    }

    public function registerAction(Request $request) {
        //redirección si ya estamos logueados
        if(is_object($this->getUser())){
            return $this->redirect('home');
        }
        
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
            /* mensaje flash */
            $this->session->getFlashBag()->add("status", $status);
        }

        return $this->render('AppBundle:User:register.html.twig', array(
                    "form" => $form->createView()
        ));
    }

    public function emailTestAction(Request $request) {
        //recogemos variable email mediante request ajax
        $email = $request->get("email");
        //cargamos entitimanager
        $em = $this->getDoctrine()->getManager();
        //cargamos repositorio de user
        $user_repo = $em->getRepository("BackendBundle:User");
        //usamos metodo find para saber si el email está siendo usado
        $user_isset = $user_repo->findOneBy(array("email" => $email));

        //used es que el email está siendo usado
        $result = "used";
        //si es verdadero el resultado es used
        if (count($user_isset) >= 1 && is_object($user_isset)) {
            $result = "used";
        } else {
            $result = "unused";
        }
        return new response($result);
    }

}
