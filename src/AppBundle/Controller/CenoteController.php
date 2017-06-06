<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use BackendBundle\Entity\Cenote;
use BackendBundle\Entity\Image;
use BackendBundle\Entity\Video;
use AppBundle\Form\CenoteType;
use AppBundle\Form\ImagesType;
use AppBundle\Form\VideosType;

class CenoteController extends Controller {

    private $session;

    public function __construct()
    {
        $this->session = new Session();
    }

    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $dql = "SELECT u FROM BackendBundle:Cenote u ORDER BY u.id ASC";
        $query = $em->createQuery($dql);
        //sacar la info de la bd con el paginador
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $query, $request->query->getInt('page', 1), 9);

        //renderisar vista
        return $this->render('AppBundle:Cenote:home.html.twig', array(
                    'pagination' => $pagination
        ));
    }

    /* metodo para registrar un cenote */

    public function newCenoteAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $cenote = new Cenote();
        $form = $this->createForm(CenoteType::class, $cenote);

        //unir la request al objeto que esta vinculado al form
        $form->handleRequest($request);
        if ($form->isSubmitted())
        {
            if ($form->isValid())
            {

                //upload-image
                $file = $form['image']->getData();
                if (!empty($file) && $file != null)
                {
                    $ext = $file->guessExtension();
                    if ($ext == 'jpg' || $ext == 'jpeg' || $ext == 'png' || $ext == 'gif')
                    {
                        $file_name = $cenote->getId() . time() . '.' . $ext;
                        $file->move("uploads/cenotes/images", $file_name);
                        $cenote->setImage($file_name);
                    }
                    else
                    {
                        $cenote->setImage(null);
                    }
                }
                else
                {
                    $cenote->setImage(null);
                }

                $cenote->setUser($user);
                //$createdAt = new \Datetime('now');
                $cenote->setCreatedAt(new \Datetime("now"));
                $em->persist($cenote);
                $flush = $em->flush();

                if ($flush == null)
                {
                    $status = 'El registro se ha creado correctamente';
                }
                else
                {
                    $status = 'Error al intentar hacer el registro';
                }
            }
            else
            {
                $status = 'El registro no se ha creado, porque el formulario no es valido.';
            }
            $this->session->getFlashBag()->add("status", $status);
            return $this->redirectToRoute('new_cenote');
        }
        return $this->render('AppBundle:Cenote:new_cenote.html.twig', array(
                    'form' => $form->createView()
        ));
    }

    /**
      public function getCenote($request){
      $em = $this->getDoctrine()->getManager();
      $user = $this->getUser();

      $cenotes_repo = $em->getRepository('BackendBundle:Cenote');
      $consulta = $cenotes_repo->findBy(array('user' => $user));

      } */
    public function cenoteAction(Request $request, $id = null)
    {
        $user = $this->getUser();
        $em = $this->getDoctrine()->getManager();

        $image_repo = $em->getRepository('BackendBundle:Image')->findAll();
        $video_repo = $em->getRepository('BackendBundle:Video')->findAll();
        $db = $em->getConnection();
        if ($id != null)
        {
            $cenote_repo = $em->getRepository('BackendBundle:Cenote');
            $cenote = $cenote_repo->findOneBy(array(
                'id' => $id
            ));
        }
        else
        {
            $cenote = $this->getId();
        }


        if (empty($cenote) || !is_object($cenote))
        {
            return $this->redirect($this->generateUrl('app_homepage'));
        }

        return $this->render('AppBundle:Cenote:cenote.html.twig', array(
                    'cenote' => $cenote,
                    'images' => $image_repo,
                    'videos' => $video_repo
        ));
    }

    public function editCenoteAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();

        $cenote = new Cenote();

        $id = $request->query->get('id');
        $cenote_repo = $em->getRepository('BackendBundle:Cenote');
        $cenote = $cenote_repo->find($id);

        // guardamos la imagen por defecto
        $cenote_image = $cenote->getImage();

        // creamos variable para la instancia del formulario
        $form = $this->createForm(CenoteType::class, $cenote);

        /* recoger la request del formulario */
        $form->handleRequest($request);


        /* comprobar si el formularion se ha enviado */
        if ($form->isSubmitted())
        {
            if ($form->isValid())
            {
                $query = $em->createQuery('SELECT u FROM BackendBundle:Cenote u WHERE u.name = :name')
                        ->setParameter('name', $form->get("name")->getData());

                // almacenamos el cenote existente
                $cenote_isset = $query->getResult();

                /* si user_isset es = 0 crea el cenote, si no no se registra por que ya existe */
                if ((count($cenote_isset) == 0 || $cenote->getName() == $cenote_isset[0]->getName()))
                {

                    // upload archivo
                    $file = $form["image"]->getData();

                    if (!empty($file) && $file != null)
                    {
                        // comprobamos que sea un formato de imagen
                        $ext = $file->guessExtension();
                        if ($ext == 'jpg' || $ext == 'jpeg' || $ext == 'png' || $ext == 'gif')
                        {
                            // creamos el nombre del archivo nuevo
                            $file_name = $cenote->getId() . time() . '.' . $ext;
                            //carpeta en la que se guardara
                            $file->move("uploads/cenotes/images", $file_name);
                            $cenote->setImage($file_name);
                        }
                    }
                    else
                    {
                        $cenote->setImage($cenote_image);
                    }

                    /* volcar el objeto y persistir en doctrine */
                    $em->persist($cenote);
                    /* pasar los objetos persistidos a la bd */
                    $flush = $em->flush();


                    // mensajes de comprobación 
                    if ($flush == null)
                    {
                        $status = "La información del cenote se a actualizado correctamente";
                    }
                    else
                    {
                        $status = "No se ha realizado ninguna actualización";
                    }
                }
                else
                {
                    $status = "El cenote ya existe en nuestra base de datos";
                }
            }
            else
            {
                $status = "No se ha realizado ninguna actualización";
            }
            $this->session->getFlashBag()->add("status", $status);
            return $this->redirectToRoute('cenotes_edit', array('id' => $id));
        }

        return $this->render('AppBundle:Cenote:edit_cenote.html.twig', array(
                    'cenote' => $cenote,
                    'form' => $form->createView()
        ));
    }

    public function uploadImagesAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $cenote = new Cenote();
        $image = new Image();
        /* guardamos la id del cenote */
        $id = $request->query->get('id');

        $cenote_repo = $em->getRepository('BackendBundle:Cenote');
        $cenote = $cenote_repo->find($id);

        $form = $this->createForm(ImagesType::class, $image);

        $form->handleRequest($request);
        if ($form->isSubmitted())
        {
            if ($form->isValid())
            {
                //upload-image
                $file = $form['image']->getData();

                if (!empty($file) && $file != null)
                {
                    $ext = $file->guessExtension();
                    if ($ext == 'jpg' || $ext == 'jpeg' || $ext == 'png' || $ext == 'gif')
                    {
                        $file_name = $image->getId() . time() . '.' . $ext;
                        $file->move("uploads/cenotes/images/profile", $file_name);
                        $image->setImage($file_name);
                    }
                    else
                    {
                        $image->setImage(null);
                    }
                }
                else
                {
                    $image->setImage(null);
                }
                $image->setCenote($cenote);
                $em->persist($image);
                $flush = $em->flush();

                if ($flush == null)
                {
                    $status = 'El registro se ha creado correctamente';
                }
                else
                {
                    $status = 'Error al intentar hacer el registro';
                }
            }
            else
            {
                $status = 'El registro no se ha creado, porque el formulario no es valido.';
            }
            $this->session->getFlashBag()->add("status", $status);
            return $this->redirectToRoute('new_cenote');
        }

        return $this->render('AppBundle:Cenote:upload_images.html.twig', array(
                    'cenote' => $cenote,
                    'form' => $form->createView()
        ));
    }

    public function uploadVideosAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $cenote = new Cenote();
        $video = new Video();
        /* guardamos la id del cenote */
        $id = $request->query->get('id');

        $cenote_repo = $em->getRepository('BackendBundle:Cenote');
        $cenote = $cenote_repo->find($id);

        $form = $this->createForm(VideosType::class, $video);

        $form->handleRequest($request);
        if ($form->isSubmitted())
        {
            if ($form->isValid())
            {

                //upload-image
                $file = $form['video']->getData();


                if (!empty($file) && $file != null)
                {
                    $ext = $file->guessExtension();

                    if ($ext == 'mp4' || $ext == 'avi' || $ext == 'wmv' || $ext == 'mov')
                    {
                        $file_name = $video->getId() . time() . '.' . $ext;
                        $file->move("uploads/cenotes/videos/profile", $file_name);
                        $video->setVideo($file_name);
                    }
                    else
                    {
                        $video->setVideo(null);
                    }
                }
                else
                {
                    $video->setVideo(null);
                }
                $video->setCenote($cenote);
                $em->persist($video);
                $flush = $em->flush();

                if ($flush == null)
                {
                    $status = 'El registro se ha creado correctamente';
                }
                else
                {
                    $status = 'Error al intentar hacer el registro';
                }
            }
            else
            {
                $status = 'El formulario no es valido';
            }

            $this->session->getFlashBag()->add("status", $status);
            return $this->redirectToRoute('home_cenotes');
        }

        return $this->render('AppBundle:Cenote:upload_videos.html.twig', array(
                    'cenote' => $cenote,
                    'form' => $form->createView()
        ));
    }

    /*
      public function uploadingImagesAction(Request $request, $id)
      {
      $em = $this->getDoctrine()->getManager();
      $db = $em->getConnection();

      $files = $request->files->get('files');
      var_dump($files);
      die();

      foreach ($files as $file)
      {
      var_dump($file);

      //$db->insert('images', array( 'cenote_id' => $id,'image' => $files));
      $query = "INSERT INTO `images`(`cenote_id`, `image`) VALUES ($id, '$file');";
      $stmt = $db->prepare($query);
      $params = array();
      $stmt->execute($params);

      //$files->move("uploads/cenotes/images/", $file);
      }

      die();

      $this->addFlash('msg', 'Las imagenes se han subido correctamente');

      return $this->redirectToRoute('upload_images', array('id' => $id));
      }

      public function searchAction(Request $request)
      {
      $em = $this->getDoctrine()->getManager();
      //obtenemos el parametro get desde la url
      $search = trim($request->query->get("search", null));

      //si no hay nada nos redirige a home
      if ($search == null)
      {
      return $this->redirect($this->generateUrl('app_homepage'));
      }

      //coincidencias
      $dql = "SELECT u FROM BackendBundle:Cenote u "
      . "WHERE u.name LIKE :search ORDER BY u.id ASC";
      //set parameter limpia los parametros que recibimos
      $query = $em->createQuery($dql)->setParameter('search', "%$search%");
      //sacar la info de la bd con el paginador
      $paginator = $this->get('knp_paginator');
      $pagination = $paginator->paginate(
      $query, $request->query->getInt('page', 1), 5);

      //renderisar vista
      return $this->render('AppBundle:Cenote:cenotes.html.twig', array(
      'pagination' => $pagination
      ));
      }
     */

    public function searchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        //obtenemos el parametro get desde la url
        $search = trim($request->query->get("search", null));

        //si no hay nada nos redirige a home
        if ($search == null)
        {
            return $this->redirect($this->generateUrl('app_homepage'));
        }

        //coincidencias 
        $dql = "SELECT u FROM BackendBundle:Cenote u "
                . "WHERE u.name LIKE :search ORDER BY u.id ASC";
        //set parameter limpia los parametros que recibimos
        $query = $em->createQuery($dql)->setParameter('search', "%$search%");
        //sacar la info de la bd con el paginador
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $query, $request->query->getInt('page', 1), 5);

        //renderisar vista
        return $this->render('AppBundle:Cenote:cenotes.html.twig', array(
                    'pagination' => $pagination
        ));
    }

}
