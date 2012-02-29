<?php

namespace Batna\Bundle\ArchiSiebelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Batna\Bundle\ArchiSiebelBundle\Entity\Gateway;
use Batna\Bundle\ArchiSiebelBundle\Form\GatewayType;

/**
 * Gateway controller.
 *
 */
class GatewayController extends Controller
{
    /**
     * Lists all Gateway entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('BatnaArchiSiebelBundle:Gateway')->findAll();

        return $this->render('BatnaArchiSiebelBundle:Gateway:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a Gateway entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('BatnaArchiSiebelBundle:Gateway')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Gateway entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BatnaArchiSiebelBundle:Gateway:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),

        ));
    }

    /**
     * Displays a form to create a new Gateway entity.
     *
     */
    public function newAction()
    {
        $entity = new Gateway();
        $form   = $this->createForm(new GatewayType(), $entity);

        return $this->render('BatnaArchiSiebelBundle:Gateway:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Creates a new Gateway entity.
     *
     */
    public function createAction()
    {
        $entity  = new Gateway();
        $request = $this->getRequest();
        $form    = $this->createForm(new GatewayType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('gtw_show', array('id' => $entity->getId())));
            
        }

        return $this->render('BatnaArchiSiebelBundle:Gateway:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing Gateway entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('BatnaArchiSiebelBundle:Gateway')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Gateway entity.');
        }

        $editForm = $this->createForm(new GatewayType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BatnaArchiSiebelBundle:Gateway:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Gateway entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('BatnaArchiSiebelBundle:Gateway')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Gateway entity.');
        }

        $editForm   = $this->createForm(new GatewayType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('gtw_edit', array('id' => $id)));
        }

        return $this->render('BatnaArchiSiebelBundle:Gateway:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Gateway entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('BatnaArchiSiebelBundle:Gateway')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Gateway entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('gtw'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
