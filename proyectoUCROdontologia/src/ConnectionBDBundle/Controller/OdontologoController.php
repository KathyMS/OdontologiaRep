<?php

namespace ConnectionBDBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use ConnectionBDBundle\Entity\Odontologo;
use ConnectionBDBundle\Form\OdontologoType;

/**
 * Odontologo controller.
 *
 */
class OdontologoController extends Controller
{

    /**
     * Lists all Odontologo entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ConnectionBDBundle:Odontologo')->findAll();

        return $this->render('ConnectionBDBundle:Odontologo:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Odontologo entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Odontologo();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('odontologo_show', array('id' => $entity->getId())));
        }

        return $this->render('ConnectionBDBundle:Odontologo:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Odontologo entity.
     *
     * @param Odontologo $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Odontologo $entity)
    {
        $form = $this->createForm(new OdontologoType(), $entity, array(
            'action' => $this->generateUrl('odontologo_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Odontologo entity.
     *
     */
    public function newAction()
    {
        $entity = new Odontologo();
        $form   = $this->createCreateForm($entity);

        return $this->render('ConnectionBDBundle:Odontologo:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Odontologo entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ConnectionBDBundle:Odontologo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Odontologo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ConnectionBDBundle:Odontologo:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Odontologo entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ConnectionBDBundle:Odontologo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Odontologo entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ConnectionBDBundle:Odontologo:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Odontologo entity.
    *
    * @param Odontologo $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Odontologo $entity)
    {
        $form = $this->createForm(new OdontologoType(), $entity, array(
            'action' => $this->generateUrl('odontologo_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Odontologo entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ConnectionBDBundle:Odontologo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Odontologo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('odontologo_edit', array('id' => $id)));
        }

        return $this->render('ConnectionBDBundle:Odontologo:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Odontologo entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ConnectionBDBundle:Odontologo')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Odontologo entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('odontologo'));
    }

    /**
     * Creates a form to delete a Odontologo entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('odontologo_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
