<?php

namespace Batna\Bundle\ArchiSiebelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Batna\Bundle\ArchiSiebelBundle\Entity\SiebelServer;
use Batna\Bundle\ArchiSiebelBundle\Form\SiebelServerType;

/**
 * SiebelServer controller.
 *
 * @Route("/siebelserver")
 */
class SiebelServerController extends Controller
{
    /**
     * Lists all SiebelServer entities.
     *
     * @Route("/", name="siebelserver")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entities = $em->getRepository('BatnaArchiSiebelBundle:SiebelServer')->findAll();

        return array('entities' => $entities);
    }

    /**
     * Finds and displays a SiebelServer entity.
     *
     * @Route("/{id}/show", name="siebelserver_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();

        $entity = $em->getRepository('BatnaArchiSiebelBundle:SiebelServer')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find SiebelServer entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        );
    }

    /**
     * Displays a form to create a new SiebelServer entity.
     *
     * @Route("/new", name="siebelserver_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new SiebelServer();
        $form   = $this->createForm(new SiebelServerType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Creates a new SiebelServer entity.
     *
     * @Route("/create", name="siebelserver_create")
     * @Method("post")
     * @Template("BatnaArchiSiebelBundle:SiebelServer:new.html.twig")
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

            return $this->redirect($this->generateUrl('siebelserver_show', array('id' => $entity->getId())));
            
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView()
        );
    }

    /**
     * Displays a form to edit an existing SiebelServer entity.
     *
     * @Route("/{id}/edit", name="siebelserver_edit")
     * @Template()
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

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing SiebelServer entity.
     *
     * @Route("/{id}/update", name="siebelserver_update")
     * @Method("post")
     * @Template("BatnaArchiSiebelBundle:SiebelServer:edit.html.twig")
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

            return $this->redirect($this->generateUrl('siebelserver_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a SiebelServer entity.
     *
     * @Route("/{id}/delete", name="siebelserver_delete")
     * @Method("post")
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

        return $this->redirect($this->generateUrl('siebelserver'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
