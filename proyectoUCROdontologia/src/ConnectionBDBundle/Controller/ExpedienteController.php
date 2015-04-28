<?php

namespace ConnectionBDBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use ConnectionBDBundle\Entity\Expediente;
use ConnectionBDBundle\Form\ExpedienteType;

/**
 * Expediente controller.
 *
 */
class ExpedienteController extends Controller
{

    /**
     * Lists all Expediente entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ConnectionBDBundle:Expediente')->findAll();

        return $this->render('ConnectionBDBundle:Expediente:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Expediente entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Expediente();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('expediente_show', array('id' => $entity->getId())));
        }

        return $this->render('ConnectionBDBundle:Expediente:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Expediente entity.
     *
     * @param Expediente $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Expediente $entity)
    {
        $form = $this->createForm(new ExpedienteType(), $entity, array(
            'action' => $this->generateUrl('expediente_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Expediente entity.
     *
     */
    public function newAction()
    {
        $entity = new Expediente();
        $form   = $this->createCreateForm($entity);

        return $this->render('ConnectionBDBundle:Expediente:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Expediente entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ConnectionBDBundle:Expediente')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Expediente entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ConnectionBDBundle:Expediente:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Expediente entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ConnectionBDBundle:Expediente')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Expediente entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ConnectionBDBundle:Expediente:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Expediente entity.
    *
    * @param Expediente $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Expediente $entity)
    {
        $form = $this->createForm(new ExpedienteType(), $entity, array(
            'action' => $this->generateUrl('expediente_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Expediente entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ConnectionBDBundle:Expediente')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Expediente entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('expediente_edit', array('id' => $id)));
        }

        return $this->render('ConnectionBDBundle:Expediente:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Expediente entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ConnectionBDBundle:Expediente')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Expediente entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('expediente'));
    }

    /**
     * Creates a form to delete a Expediente entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('expediente_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
