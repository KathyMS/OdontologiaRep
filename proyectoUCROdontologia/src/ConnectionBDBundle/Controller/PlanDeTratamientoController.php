<?php

namespace ConnectionBDBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use ConnectionBDBundle\Entity\PlanDeTratamiento;
use ConnectionBDBundle\Form\PlanDeTratamientoType;

/**
 * PlanDeTratamiento controller.
 *
 */
class PlanDeTratamientoController extends Controller
{

    /**
     * Lists all PlanDeTratamiento entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ConnectionBDBundle:PlanDeTratamiento')->findAll();

        return $this->render('ConnectionBDBundle:PlanDeTratamiento:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new PlanDeTratamiento entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new PlanDeTratamiento();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('plandetratamiento_show', array('id' => $entity->getId())));
        }

        return $this->render('ConnectionBDBundle:PlanDeTratamiento:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a PlanDeTratamiento entity.
     *
     * @param PlanDeTratamiento $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(PlanDeTratamiento $entity)
    {
        $form = $this->createForm(new PlanDeTratamientoType(), $entity, array(
            'action' => $this->generateUrl('plandetratamiento_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new PlanDeTratamiento entity.
     *
     */
    public function newAction()
    {
        $entity = new PlanDeTratamiento();
        $form   = $this->createCreateForm($entity);

        return $this->render('ConnectionBDBundle:PlanDeTratamiento:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a PlanDeTratamiento entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ConnectionBDBundle:PlanDeTratamiento')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PlanDeTratamiento entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ConnectionBDBundle:PlanDeTratamiento:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing PlanDeTratamiento entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ConnectionBDBundle:PlanDeTratamiento')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PlanDeTratamiento entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ConnectionBDBundle:PlanDeTratamiento:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a PlanDeTratamiento entity.
    *
    * @param PlanDeTratamiento $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(PlanDeTratamiento $entity)
    {
        $form = $this->createForm(new PlanDeTratamientoType(), $entity, array(
            'action' => $this->generateUrl('plandetratamiento_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing PlanDeTratamiento entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ConnectionBDBundle:PlanDeTratamiento')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PlanDeTratamiento entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('plandetratamiento_edit', array('id' => $id)));
        }

        return $this->render('ConnectionBDBundle:PlanDeTratamiento:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a PlanDeTratamiento entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ConnectionBDBundle:PlanDeTratamiento')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find PlanDeTratamiento entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('plandetratamiento'));
    }

    /**
     * Creates a form to delete a PlanDeTratamiento entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('plandetratamiento_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
