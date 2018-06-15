<?php

namespace AppBundle\Controller;

use AppBundle\Entity\ArtworkUserEmotion;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Artworkuseremotion controller.
 *
 * @Route("admin/artworkuseremotion")
 */
class ArtworkUserEmotionController extends Controller
{
    /**
     * Lists all artworkUserEmotion entities.
     *
     * @Route("/", name="artworkuseremotion_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $artworkUserEmotions = $em->getRepository('AppBundle:ArtworkUserEmotion')->findAll();

        return $this->render('artworkuseremotion/index.html.twig', array(
            'artworkUserEmotions' => $artworkUserEmotions,
        ));
    }

    /**
     * Creates a new artworkUserEmotion entity.
     *
     * @Route("/new", name="artworkuseremotion_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $artworkUserEmotion = new Artworkuseremotion();
        $form = $this->createForm('AppBundle\Form\ArtworkUserEmotionType', $artworkUserEmotion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($artworkUserEmotion);
            $em->flush();

            return $this->redirectToRoute('artworkuseremotion_show', array('id' => $artworkUserEmotion->getId()));
        }

        return $this->render('artworkuseremotion/new.html.twig', array(
            'artworkUserEmotion' => $artworkUserEmotion,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a artworkUserEmotion entity.
     *
     * @Route("/{id}", name="artworkuseremotion_show")
     * @Method("GET")
     */
    public function showAction(ArtworkUserEmotion $artworkUserEmotion)
    {
        $deleteForm = $this->createDeleteForm($artworkUserEmotion);

        return $this->render('artworkuseremotion/show.html.twig', array(
            'artworkUserEmotion' => $artworkUserEmotion,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing artworkUserEmotion entity.
     *
     * @Route("/{id}/edit", name="artworkuseremotion_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, ArtworkUserEmotion $artworkUserEmotion)
    {
        $deleteForm = $this->createDeleteForm($artworkUserEmotion);
        $editForm = $this->createForm('AppBundle\Form\ArtworkUserEmotionType', $artworkUserEmotion);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('artworkuseremotion_edit', array('id' => $artworkUserEmotion->getId()));
        }

        return $this->render('artworkuseremotion/edit.html.twig', array(
            'artworkUserEmotion' => $artworkUserEmotion,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a artworkUserEmotion entity.
     *
     * @Route("/{id}", name="artworkuseremotion_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, ArtworkUserEmotion $artworkUserEmotion)
    {
        $form = $this->createDeleteForm($artworkUserEmotion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($artworkUserEmotion);
            $em->flush();
        }

        return $this->redirectToRoute('artworkuseremotion_index');
    }

    /**
     * Creates a form to delete a artworkUserEmotion entity.
     *
     * @param ArtworkUserEmotion $artworkUserEmotion The artworkUserEmotion entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ArtworkUserEmotion $artworkUserEmotion)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('artworkuseremotion_delete', array('id' => $artworkUserEmotion->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
