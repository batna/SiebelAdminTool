<?php

namespace Batna\Bundle\ArchiSiebelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Batna\Bundle\ArchiSiebelBundle\Entity\EnterpriseServer;
use Batna\Bundle\ArchiSiebelBundle\Form\EnterpriseServerType;

/**
 * EnterpriseServer controller.
 *
 */
class EnterpriseServerController extends Controller
{
    /**
     * Lists all EnterpriseServer entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('BatnaArchiSiebelBundle:EnterpriseServer')->findAll();

        return $this->render('BatnaArchiSiebelBundle:EnterpriseServer:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a EnterpriseServer entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('BatnaArchiSiebelBundle:EnterpriseServer')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find EnterpriseServer entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BatnaArchiSiebelBundle:EnterpriseServer:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),

        ));
    }

    /**
     * Displays a form to create a new EnterpriseServer entity.
     *
     */
    public function newAction()
    {
        $entity = new EnterpriseServer();
        $form   = $this->createForm(new EnterpriseServerType(), $entity);

        return $this->render('BatnaArchiSiebelBundle:EnterpriseServer:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Creates a new EnterpriseServer entity.
     *
     */
    public function createAction()
    {
        $entity  = new EnterpriseServer();
        $request = $this->getRequest();
        $form    = $this->createForm(new EnterpriseServerType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('es_show', array('id' => $entity->getId())));
            
        }

        return $this->render('BatnaArchiSiebelBundle:EnterpriseServer:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing EnterpriseServer entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('BatnaArchiSiebelBundle:EnterpriseServer')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find EnterpriseServer entity.');
        }

        $editForm = $this->createForm(new EnterpriseServerType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BatnaArchiSiebelBundle:EnterpriseServer:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing EnterpriseServer entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('BatnaArchiSiebelBundle:EnterpriseServer')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find EnterpriseServer entity.');
        }

        $editForm   = $this->createForm(new EnterpriseServerType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('es_edit', array('id' => $id)));
        }

        return $this->render('BatnaArchiSiebelBundle:EnterpriseServer:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a EnterpriseServer entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('BatnaArchiSiebelBundle:EnterpriseServer')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find EnterpriseServer entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('es'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
