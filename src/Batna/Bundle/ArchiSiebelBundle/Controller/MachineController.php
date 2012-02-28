<?php

namespace Batna\Bundle\ArchiSiebelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Batna\Bundle\ArchiSiebelBundle\Entity\Machine;
use Batna\Bundle\ArchiSiebelBundle\Form\MachineType;

/**
 * Machine controller.
 *
 * @Route("/machine")
 */
class MachineController extends Controller
{
    /**
     * Lists all Machine entities.
     *
     * @Route("/", name="machine")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('BatnaArchiSiebelBundle:Machine')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a Machine entity.
     *
     * @Route("/{id}/show", name="machine_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('BatnaArchiSiebelBundle:Machine')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Machine entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        );
    }

    /**
     * Displays a form to create a new Machine entity.
     *
     * @Route("/new", name="machine_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Machine();
        $form   = $this->createForm(new MachineType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Creates a new Machine entity.
     *
     * @Route("/create", name="machine_create")
     * @Method("post")
     * @Template("BatnaArchiSiebelBundle:Machine:new.html.twig")
     */
    public function createAction()
    {
        $entity  = new Machine();
        $request = $this->getRequest();
        $form    = $this->createForm(new MachineType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('machine_show', array('id' => $entity->getId())));
            
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing Machine entity.
     *
     * @Route("/{id}/edit", name="machine_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('BatnaArchiSiebelBundle:Machine')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Machine entity.');
        }

        $editForm = $this->createForm(new MachineType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Machine entity.
     *
     * @Route("/{id}/update", name="machine_update")
     * @Method("post")
     * @Template("BatnaArchiSiebelBundle:Machine:edit.html.twig")
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('BatnaArchiSiebelBundle:Machine')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Machine entity.');
        }

        $editForm   = $this->createForm(new MachineType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('machine_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Machine entity.
     *
     * @Route("/{id}/delete", name="machine_delete")
     * @Method("post")
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('BatnaArchiSiebelBundle:Machine')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Machine entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('machine'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
