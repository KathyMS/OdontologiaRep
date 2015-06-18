<?php

namespace ConnectionBDBundle\Controller;

use ConnectionBDBundle\Entity\Paciente;
use ConnectionBDBundle\Form\PacienteType;
use pdfPaciente;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;

/**
 * Paciente controller.
 *
 */
class PacienteController extends Controller
{

    /**
     * Lists all Paciente entities.
     *
     */
    public function indexAction(Request $request)
    {
            $session = $request->getSession();
        if ($session->has("id")) {
            $em = $this->getDoctrine()->getManager();

            $entities = $em->getRepository('ConnectionBDBundle:Paciente')->findAll();

            return $this->render('ConnectionBDBundle:Paciente:index.html.twig', array(
                        'entities' => $entities,
            ));
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debe estar logueado para ver este contenido'
            );
            return $this->redirect($this->generateUrl('login'));
        }
    }

    /**
     * Creates a new Paciente entity.
     *
     */
    public function createAction(Request $request)
    {
            $session = $request->getSession();
        if ($session->has("id")) {
           $entity = new Paciente();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('paciente_show', array('id' => $entity->getId())));
        }

        return $this->render('ConnectionBDBundle:Paciente:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),));
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debe estar logueado para ver este contenido');
            return $this->redirect($this->generateUrl('login'));
        }
        
        
    }

    /**
     * Creates a form to create a Paciente entity.
     *
     * @param Paciente $entity The entity
     *
     * @return Form The form
     */
    private function createCreateForm(Paciente $entity)
    {
        $form = $this->createForm(new PacienteType(), $entity, array(
            'action' => $this->generateUrl('paciente_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crear', 'attr'  => array ( 'class'  =>  'btn btn-primary btn-sm')));

        return $form;
    }

    /**
     * Displays a form to create a new Paciente entity.
     *
     */
    public function newAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            $entity = new Paciente();
            $form = $this->createCreateForm($entity);

            return $this->render('ConnectionBDBundle:Paciente:new.html.twig', array(
                        'entity' => $entity,
                        'form' => $form->createView(),
            ));
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debe estar logueado para ver este contenido'
            );
            return $this->redirect($this->generateUrl('login'));
        }
    }

    /**
     * Finds and displays a Paciente entity.
     *
     */
    public function showAction($id, Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            $em = $this->getDoctrine()->getManager();

            $entity = $em->getRepository('ConnectionBDBundle:Paciente')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Paciente entity.');
            }

            $deleteForm = $this->createDeleteForm($id);

            return $this->render('ConnectionBDBundle:Paciente:show.html.twig', array(
                        'entity' => $entity,
                        'delete_form' => $deleteForm->createView(),));
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debe estar logueado para ver este contenido');
            return $this->redirect($this->generateUrl('login'));
        }
    }

    /**
     * Displays a form to edit an existing Paciente entity.
     *
     */
    public function editAction($id,Request $request)
    {
        
            $session = $request->getSession();
        if ($session->has("id")) {
           $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ConnectionBDBundle:Paciente')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Paciente entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ConnectionBDBundle:Paciente:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debe estar logueado para ver este contenido'
            );
            return $this->redirect($this->generateUrl('login'));
        }
        
    }

    /**
    * Creates a form to edit a Paciente entity.
    *
    * @param Paciente $entity The entity
    *
    * @return Form The form
    */
    private function createEditForm(Paciente $entity)
    {
        $form = $this->createForm(new PacienteType(), $entity, array(
            'action' => $this->generateUrl('paciente_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Actualizar', 'attr'  => array ( 'class'  =>  'btn btn-primary btn-sm' )));

        return $form;
    }
    /**
     * Edits an existing Paciente entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ConnectionBDBundle:Paciente')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Paciente entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('paciente_edit', array('id' => $id)));
        }

        return $this->render('ConnectionBDBundle:Paciente:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Paciente entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ConnectionBDBundle:Paciente')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Paciente entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('paciente'));
    }

    /**
     * Creates a form to delete a Paciente entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('paciente_delete', array('id' => $id)))
            ->setMethod('DELETE')
           
            ->add('submit', 'submit', array('label' => 'Eliminar', 'attr'  => array ( 'class'  =>  'btn btn-primary btn-sm' )))
            ->getForm()
        ;
    }
        public function pdfAction($id) {
        include ('pdfPaciente.php');

        $pdf = new pdfPaciente();
        $pdf->pdf($id);

        return $this->redirect($this->generateUrl('paciente'));
    }
      
}
