<?php

namespace Batna\Bundle\ArchiSiebelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Batna\Bundle\ArchiSiebelBundle\Entity\Contexte;
use Batna\Bundle\ArchiSiebelBundle\Form\ContexteType;

/**
 * Contexte controller.
 *
 */
class ContexteController extends Controller
{
    /**
     * Lists all Contexte entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('BatnaArchiSiebelBundle:Contexte')->findAll();

        return $this->render('BatnaArchiSiebelBundle:Contexte:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a Contexte entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('BatnaArchiSiebelBundle:Contexte')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Contexte entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BatnaArchiSiebelBundle:Contexte:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),

        ));
    }

    /**
     * Displays a form to create a new Contexte entity.
     *
     */
    public function newAction()
    {
        $entity = new Contexte();
        $form   = $this->createForm(new ContexteType(), $entity);

        return $this->render('BatnaArchiSiebelBundle:Contexte:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Creates a new Contexte entity.
     *
     */
    public function createAction()
    {
        $entity  = new Contexte();
        $request = $this->getRequest();
        $form    = $this->createForm(new ContexteType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('contexte_show', array('id' => $entity->getId())));
            
        }

        return $this->render('BatnaArchiSiebelBundle:Contexte:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing Contexte entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('BatnaArchiSiebelBundle:Contexte')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Contexte entity.');
        }

        $editForm = $this->createForm(new ContexteType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BatnaArchiSiebelBundle:Contexte:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Contexte entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('BatnaArchiSiebelBundle:Contexte')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Contexte entity.');
        }

        $editForm   = $this->createForm(new ContexteType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('contexte_edit', array('id' => $id)));
        }

        return $this->render('BatnaArchiSiebelBundle:Contexte:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Contexte entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('BatnaArchiSiebelBundle:Contexte')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Contexte entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('contexte'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
