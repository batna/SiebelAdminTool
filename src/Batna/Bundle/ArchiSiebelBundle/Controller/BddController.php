<?php

namespace Batna\Bundle\ArchiSiebelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Batna\Bundle\ArchiSiebelBundle\Entity\Bdd;
use Batna\Bundle\ArchiSiebelBundle\Form\BddType;

/**
 * Bdd controller.
 *
 */
class BddController extends Controller
{
    /**
     * Lists all Bdd entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('BatnaArchiSiebelBundle:Bdd')->findAll();

        return $this->render('BatnaArchiSiebelBundle:Bdd:index.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * Finds and displays a Bdd entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('BatnaArchiSiebelBundle:Bdd')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Bdd entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BatnaArchiSiebelBundle:Bdd:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),

        ));
    }

    /**
     * Displays a form to create a new Bdd entity.
     *
     */
    public function newAction()
    {
        $entity = new Bdd();
        $form   = $this->createForm(new BddType(), $entity);

        return $this->render('BatnaArchiSiebelBundle:Bdd:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Creates a new Bdd entity.
     *
     */
    public function createAction()
    {
        $entity  = new Bdd();
        $request = $this->getRequest();
        $form    = $this->createForm(new BddType(), $entity);
        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('bdd_show', array('id' => $entity->getId())));
            
        }

        return $this->render('BatnaArchiSiebelBundle:Bdd:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing Bdd entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('BatnaArchiSiebelBundle:Bdd')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Bdd entity.');
        }

        $editForm = $this->createForm(new BddType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BatnaArchiSiebelBundle:Bdd:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Bdd entity.
     *
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('BatnaArchiSiebelBundle:Bdd')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Bdd entity.');
        }

        $editForm   = $this->createForm(new BddType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        $request = $this->getRequest();

        $editForm->bindRequest($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('bdd_edit', array('id' => $id)));
        }

        return $this->render('BatnaArchiSiebelBundle:Bdd:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Bdd entity.
     *
     */
    public function deleteAction($id)
    {
        $form = $this->createDeleteForm($id);
        $request = $this->getRequest();

        $form->bindRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $entity = $em->getRepository('BatnaArchiSiebelBundle:Bdd')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Bdd entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('bdd'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
