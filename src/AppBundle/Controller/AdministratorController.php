<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use BackendBundle\Entity\Cenote;
use BackendBundle\Entity\Image;
use BackendBundle\Entity\User;
use BackendBundle\Entity\Video;
use AppBundle\Form\CenoteType;
use AppBundle\Form\ImagesType;
use AppBundle\Form\VideosType;

class AdministratorController extends Controller {

    private $session;

    public function __construct()
    {
        $this->session = new Session();
    }

    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $db = $em->getConnection();

        // sacar cantidad de cenotes
        $queryte = "SELECT COUNT(id) AS todos_cenotes FROM cenotes;";
        $stmt = $db->prepare($queryte);
        $params = array();
        $stmt->execute($params);

        $po = $stmt->fetchAll();

        foreach ($po as $te)
        {
            $te["todos_cenotes"];
        }

        // sacar cantidad de usuarios
        $queryu = "SELECT COUNT(id) AS usuarios FROM users;";
        $stmt = $db->prepare($queryu);
        $params = array();
        $stmt->execute($params);

        $po = $stmt->fetchAll();

        foreach ($po as $u)
        {
            $u["usuarios"];
        }

        return $this->render('AppBundle:Administrator:administrator.html.twig', array(
                    'todos_cenotes' => $te,
                    'usuarios' => $u
        ));
    }

    public function usersAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        // Hacemos una consulta a la entidad Company para que nos saque los objetos de tipo Company
        $dql = "SELECT u FROM BackendBundle:User u";
        $query = $em->createQuery($dql);


        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $query, $request->query->getInt('page', 1), 5
        );

        return $this->render('AppBundle:Administrator:administrator_users.html.twig', array(
                    'pagination' => $pagination
        ));
    }

    public function allCenotesAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        // Hacemos una consulta a la entidad Company para que nos saque los objetos de tipo Company
        $dql = "SELECT u FROM BackendBundle:Cenote u";
        $query = $em->createQuery($dql);


        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $query, $request->query->getInt('page', 1), 5
        );

        return $this->render('AppBundle:Administrator:administrator_allcenotes.html.twig', array(
                    'pagination' => $pagination
        ));
    }

    public function deleteUsersAction(Request $request, $id = null)
    {

        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();

        $user_repo = $em->getRepository('BackendBundle:User');
        $user = $user_repo->find($id);

        $em->remove($user);
        $flush = $em->flush();

        $this->addFlash('msg', 'El usuario se ha eliminado con exito');

        return $this->redirectToRoute("administrator_user");
    }

    public function deleteCenotesAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        $cenote = new Cenote();
        $user = new User();
        $video = new Video();
        $image = new Image();
        $id = $request->query->get('id');
        $cenote_repo = $em->getRepository('BackendBundle:Cenote');
        $cenote = $cenote_repo->find($id);

        $query = "SELECT images.cenote_id, cenotes.id FROM images INNER JOIN cenotes ON images.cenote_id = cenotes.id; ";
        
        $em->remove($cenote);
        $flush = $em->flush();

        $this->addFlash('msg', 'El registro se ha eliminado con exito');

        return $this->redirectToRoute("administrator_allcenotes");
    }

}
