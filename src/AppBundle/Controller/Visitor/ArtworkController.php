<?php
/**
 * Created by PhpStorm.
 * User: wilder7
 * Date: 14/06/18
 * Time: 15:22
 */

namespace AppBundle\Controller\Visitor;

use AppBundle\Entity\Artwork;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Class ArtworkController
 *
 * @Route("artwork")
 */
class ArtworkController extends Controller
{
    /**
     * Lists all artwork entities.
     *
     * @Route("/", name="visitor_artwork_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $artworks = $em->getRepository('AppBundle:Artwork')->findAll();

        return $this->render('visitor/list.html.twig', array(
            'artworks' => $artworks,
        ));
    }

    
}