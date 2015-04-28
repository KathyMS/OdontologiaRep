<?php

namespace ConnectionBDBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use ConnectionBDBundle\Entity\TratamientoGeneral;
use ConnectionBDBundle\Form\TratamientoGeneralType;

/**
 * TratamientoGeneral controller.
 *
 */
class TratamientoGeneralController extends Controller
{

    /**
     * Lists all TratamientoGeneral entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ConnectionBDBundle:TratamientoGeneral')->findAll();

        return $this->render('ConnectionBDBundle:TratamientoGeneral:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new TratamientoGeneral entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new TratamientoGeneral();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tratamientogeneral_show', array('id' => $entity->getId())));
        }

        return $this->render('ConnectionBDBundle:TratamientoGeneral:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a TratamientoGeneral entity.
     *
     * @param TratamientoGeneral $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(TratamientoGeneral $entity)
    {
        $form = $this->createForm(new TratamientoGeneralType(), $entity, array(
            'action' => $this->generateUrl('tratamientogeneral_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new TratamientoGeneral entity.
     *
     */
    public function newAction()
    {
        $entity = new TratamientoGeneral();
        $form   = $this->createCreateForm($entity);

        return $this->render('ConnectionBDBundle:TratamientoGeneral:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TratamientoGeneral entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ConnectionBDBundle:TratamientoGeneral')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TratamientoGeneral entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ConnectionBDBundle:TratamientoGeneral:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing TratamientoGeneral entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ConnectionBDBundle:TratamientoGeneral')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TratamientoGeneral entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ConnectionBDBundle:TratamientoGeneral:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a TratamientoGeneral entity.
    *
    * @param TratamientoGeneral $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(TratamientoGeneral $entity)
    {
        $form = $this->createForm(new TratamientoGeneralType(), $entity, array(
            'action' => $this->generateUrl('tratamientogeneral_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing TratamientoGeneral entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ConnectionBDBundle:TratamientoGeneral')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TratamientoGeneral entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('tratamientogeneral_edit', array('id' => $id)));
        }

        return $this->render('ConnectionBDBundle:TratamientoGeneral:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a TratamientoGeneral entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ConnectionBDBundle:TratamientoGeneral')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find TratamientoGeneral entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('tratamientogeneral'));
    }

    /**
     * Creates a form to delete a TratamientoGeneral entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tratamientogeneral_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
