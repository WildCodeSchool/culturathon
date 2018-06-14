<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Emotion;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Emotion controller.
 *
 * @Route("emotion")
 */
class EmotionController extends Controller
{
    /**
     * Lists all emotion entities.
     *
     * @Route("/", name="emotion_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $emotions = $em->getRepository('AppBundle:Emotion')->findAll();

        return $this->render('emotion/index.html.twig', array(
            'emotions' => $emotions,
        ));
    }

    /**
     * Creates a new emotion entity.
     *
     * @Route("/new", name="emotion_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $emotion = new Emotion();
        $form = $this->createForm('AppBundle\Form\EmotionType', $emotion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($emotion);
            $em->flush();

            return $this->redirectToRoute('emotion_show', array('id' => $emotion->getId()));
        }

        return $this->render('emotion/new.html.twig', array(
            'emotion' => $emotion,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a emotion entity.
     *
     * @Route("/{id}", name="emotion_show")
     * @Method("GET")
     */
    public function showAction(Emotion $emotion)
    {
        $deleteForm = $this->createDeleteForm($emotion);

        return $this->render('emotion/show.html.twig', array(
            'emotion' => $emotion,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing emotion entity.
     *
     * @Route("/{id}/edit", name="emotion_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Emotion $emotion)
    {
        $deleteForm = $this->createDeleteForm($emotion);
        $editForm = $this->createForm('AppBundle\Form\EmotionType', $emotion);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('emotion_edit', array('id' => $emotion->getId()));
        }

        return $this->render('emotion/edit.html.twig', array(
            'emotion' => $emotion,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a emotion entity.
     *
     * @Route("/{id}", name="emotion_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Emotion $emotion)
    {
        $form = $this->createDeleteForm($emotion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($emotion);
            $em->flush();
        }

        return $this->redirectToRoute('emotion_index');
    }

    /**
     * Creates a form to delete a emotion entity.
     *
     * @param Emotion $emotion The emotion entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Emotion $emotion)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('emotion_delete', array('id' => $emotion->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
