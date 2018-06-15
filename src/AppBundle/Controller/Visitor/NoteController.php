<?php
/**
 * Created by PhpStorm.
 * User: wilder7
 * Date: 14/06/18
 * Time: 15:22
 */

namespace AppBundle\Controller\Visitor;

use AppBundle\Entity\Artwork;
use AppBundle\Entity\ArtworkUserEmotion;
use AppBundle\Entity\Emotion;
use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class NoteController
 *
 * @Route("note")
 */
class NoteController extends Controller
{
    /**
     * @Route("/gradient/{id}", name="gradient")
     * @Method("GET")
     */

    public function createGradient(Artwork $artwork)
    {
        $em = $this->getDoctrine()->getManager();
        $artworkUserEmotions = $em->getRepository('AppBundle:ArtworkUserEmotion')->findBy(['artwork' => $artwork]);
        foreach ($artworkUserEmotions as $emotion) {
            $emotions[] = $emotion->getEmotion();
        }
        $total = sizeof($emotions);

        foreach ($emotions as $color){
            $colors[] = $color->getColor();
        }
        $nbcolor = array_count_values($colors);

        foreach ($nbcolor as $key => $value) {
            $percents[]=($nbcolor[$key]/$total)*100;
        }

        return $this->render('visitor/gradient.html.twig', array(
            'artworkUserEmotions' => $artworkUserEmotions,
            'percents'=> $percents,
        ));

    }

    /**
     * @Route("/{emotion}/{artwork}", name="note")
     * @Method("GET")
     */
    public function noteAction(Emotion $emotion, Artwork $artwork)
    {
        $artworkUserEmotion = new ArtworkUserEmotion();

        $artworkUserEmotion
            ->setEmotion($emotion)
            ->setArtwork($artwork)
            ->setUser($this->getUser());

        $em = $this->getDoctrine()->getManager();
        $em->persist($artworkUserEmotion);
        $em->flush();

        return $this->redirectToRoute('gradient', ['id' => $artwork->getId()]);

    }


}