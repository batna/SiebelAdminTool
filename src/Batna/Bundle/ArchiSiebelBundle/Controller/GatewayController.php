<?php

namespace Batna\Bundle\ArchiSiebelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Batna\Bundle\ArchiSiebelBundle\Entity\Gateway;
use Batna\Bundle\ArchiSiebelBundle\Form\GatewayType;

/**
 * Gateway controller.
 *
 * @Route("/gateway")
 */
class GatewayController extends Controller
{
    /**
     * Lists all Gateway entities.
     *
     * @Route("/", name="gateway")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('BatnaArchiSiebelBundle:Gateway')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a Gateway entity.
     *
     * @Route("/{id}/show", name="gateway_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('BatnaArchiSiebelBundle:Gateway')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Gateway entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        );
    }

    /**
     * Displays a form to create a new Gateway entity.
     *
     * @Route("/new", name="gateway_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Gateway();
        $form   = $this->createForm(new GatewayType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Creates a new Gateway entity.
     *
     * @Route("/create", name="gateway_create")
     * @Method("post")
     * @Template("BatnaArchiSiebelBundle:Gateway:new.html.twig")
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

            return $this->redirect($this->generateUrl('gateway_show', array('id' => $entity->getId())));
            
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Gateway entity.
     *
     * @Route("/{id}/edit", name="gateway_edit")
     * @Template()
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

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Gateway entity.
     *
     * @Route("/{id}/update", name="gateway_update")
     * @Method("post")
     * @Template("BatnaArchiSiebelBundle:Gateway:edit.html.twig")
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

            return $this->redirect($this->generateUrl('gateway_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Gateway entity.
     *
     * @Route("/{id}/delete", name="gateway_delete")
     * @Method("post")
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

        return $this->redirect($this->generateUrl('gateway'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
