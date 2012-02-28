<?php

namespace Batna\Bundle\ArchiSiebelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Batna\Bundle\ArchiSiebelBundle\Entity\EnterpriseServer;
use Batna\Bundle\ArchiSiebelBundle\Form\EnterpriseServerType;

/**
 * EnterpriseServer controller.
 *
 * @Route("/enterpriseserver")
 */
class EnterpriseServerController extends Controller
{
    /**
     * Lists all EnterpriseServer entities.
     *
     * @Route("/", name="enterpriseserver")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('BatnaArchiSiebelBundle:EnterpriseServer')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a EnterpriseServer entity.
     *
     * @Route("/{id}/show", name="enterpriseserver_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('BatnaArchiSiebelBundle:EnterpriseServer')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find EnterpriseServer entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        );
    }

    /**
     * Displays a form to create a new EnterpriseServer entity.
     *
     * @Route("/new", name="enterpriseserver_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new EnterpriseServer();
        $form   = $this->createForm(new EnterpriseServerType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Creates a new EnterpriseServer entity.
     *
     * @Route("/create", name="enterpriseserver_create")
     * @Method("post")
     * @Template("BatnaArchiSiebelBundle:EnterpriseServer:new.html.twig")
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

            return $this->redirect($this->generateUrl('enterpriseserver_show', array('id' => $entity->getId())));
            
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing EnterpriseServer entity.
     *
     * @Route("/{id}/edit", name="enterpriseserver_edit")
     * @Template()
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

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing EnterpriseServer entity.
     *
     * @Route("/{id}/update", name="enterpriseserver_update")
     * @Method("post")
     * @Template("BatnaArchiSiebelBundle:EnterpriseServer:edit.html.twig")
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

            return $this->redirect($this->generateUrl('enterpriseserver_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a EnterpriseServer entity.
     *
     * @Route("/{id}/delete", name="enterpriseserver_delete")
     * @Method("post")
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

        return $this->redirect($this->generateUrl('enterpriseserver'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
