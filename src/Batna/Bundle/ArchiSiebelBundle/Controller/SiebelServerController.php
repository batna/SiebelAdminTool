<?php

namespace Batna\Bundle\ArchiSiebelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Batna\Bundle\ArchiSiebelBundle\Entity\SiebelServer;
use Batna\Bundle\ArchiSiebelBundle\Form\SiebelServerType;

/**
 * SiebelServer controller.
 *
 */
class SiebelServerController extends Controller
{
    /**
     * Lists all SiebelServer entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('BatnaArchiSiebelBundle:SiebelServer')->findAll();

        return $this->render('BatnaArchiSiebelBundle:SiebelServer:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a SiebelServer entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('BatnaArchiSiebelBundle:SiebelServer')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find SiebelServer entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BatnaArchiSiebelBundle:SiebelServer:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),

        ));
    }

    /**
     * Displays a form to create a new SiebelServer entity.
     *
     */
    public function newAction()
    {
        $entity = new SiebelServer();
        $form   = $this->createForm(new SiebelServerType(), $entity);

        return $this->render('BatnaArchiSiebelBundle:SiebelServer:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Creates a new SiebelServer entity.
     *
     */
    public function createAction()
    {
        $entity  = new SiebelServer();
        $request = $this->getRequest();
        $form    = $this->createForm(new SiebelServerType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('ss_show', array('id' => $entity->getId())));
            
        }

        return $this->render('BatnaArchiSiebelBundle:SiebelServer:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing SiebelServer entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('BatnaArchiSiebelBundle:SiebelServer')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find SiebelServer entity.');
        }

        $editForm = $this->createForm(new SiebelServerType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BatnaArchiSiebelBundle:SiebelServer:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing SiebelServer entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('BatnaArchiSiebelBundle:SiebelServer')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find SiebelServer entity.');
        }

        $editForm   = $this->createForm(new SiebelServerType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('ss_edit', array('id' => $id)));
        }

        return $this->render('BatnaArchiSiebelBundle:SiebelServer:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a SiebelServer entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('BatnaArchiSiebelBundle:SiebelServer')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find SiebelServer entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('ss'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
