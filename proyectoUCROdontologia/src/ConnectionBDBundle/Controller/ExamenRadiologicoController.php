<?php

namespace ConnectionBDBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use ConnectionBDBundle\Entity\ExamenRadiologico;
use ConnectionBDBundle\Form\ExamenRadiologicoType;

/**
 * ExamenRadiologico controller.
 *
 */
class ExamenRadiologicoController extends Controller
{

    /**
     * Lists all ExamenRadiologico entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ConnectionBDBundle:ExamenRadiologico')->findAll();

        return $this->render('ConnectionBDBundle:ExamenRadiologico:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new ExamenRadiologico entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new ExamenRadiologico();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('examenradiologico_show', array('id' => $entity->getId())));
        }

        return $this->render('ConnectionBDBundle:ExamenRadiologico:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a ExamenRadiologico entity.
     *
     * @param ExamenRadiologico $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(ExamenRadiologico $entity)
    {
        $form = $this->createForm(new ExamenRadiologicoType(), $entity, array(
            'action' => $this->generateUrl('examenradiologico_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new ExamenRadiologico entity.
     *
     */
    public function newAction()
    {
        $entity = new ExamenRadiologico();
        $form   = $this->createCreateForm($entity);

        return $this->render('ConnectionBDBundle:ExamenRadiologico:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ExamenRadiologico entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ConnectionBDBundle:ExamenRadiologico')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ExamenRadiologico entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ConnectionBDBundle:ExamenRadiologico:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ExamenRadiologico entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ConnectionBDBundle:ExamenRadiologico')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ExamenRadiologico entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ConnectionBDBundle:ExamenRadiologico:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a ExamenRadiologico entity.
    *
    * @param ExamenRadiologico $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(ExamenRadiologico $entity)
    {
        $form = $this->createForm(new ExamenRadiologicoType(), $entity, array(
            'action' => $this->generateUrl('examenradiologico_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing ExamenRadiologico entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ConnectionBDBundle:ExamenRadiologico')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ExamenRadiologico entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('examenradiologico_edit', array('id' => $id)));
        }

        return $this->render('ConnectionBDBundle:ExamenRadiologico:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a ExamenRadiologico entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ConnectionBDBundle:ExamenRadiologico')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ExamenRadiologico entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('examenradiologico'));
    }

    /**
     * Creates a form to delete a ExamenRadiologico entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('examenradiologico_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
