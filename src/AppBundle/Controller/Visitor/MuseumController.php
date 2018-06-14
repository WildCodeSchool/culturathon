<?php
/**
 * Created by PhpStorm.
 * User: wilder7
 * Date: 14/06/18
 * Time: 21:23
 */

namespace AppBundle\Controller\Visitor;

use AppBundle\Entity\Museum;
use AppBundle\Entity\Artwork;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Museum controller.
 *
 * @Route("museum")
 */
class MuseumController extends Controller
{
    /**
     * Lists all museum entities.
     *
     * @Route("/", name="vistor_museum_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $museums = $em->getRepository('AppBundle:Museum')->findAll();

        return $this->render('visitor/museum.html.twig', array(
            'museums' => $museums,
        ));
    }

    /**
     * Finds and displays a museum entity.
     *
     * @Route("/{id}", name="visitor_museum_show")
     * @Method("GET")
     */
    public function showArtwork(Museum $museum)
    {
        $em = $this->getDoctrine()->getManager();

        $artworks = $em->getRepository('AppBundle:Artwork')->findByMuseum($museum);

        return $this->render('visitor/artMuseum.html.twig', array(
            'museum' => $museum,
            'artworks'=>$artworks,
        ));
    }
}