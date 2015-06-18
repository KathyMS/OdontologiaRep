<?php

namespace ConnectionBDBundle\Controller;

use ConnectionBDBundle\Entity\HistorialMedico;
use ConnectionBDBundle\Form\HistorialMedicoType;
use HistorialMedicoPdf;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;

/**
 * HistorialMedico controller.
 *
 */
class HistorialMedicoController extends Controller
{

    /**
     * Lists all HistorialMedico entities.
     *
     */
    public function indexAction(Request $request)
    {
            $session = $request->getSession();
        if ($session->has("id")) {
           $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ConnectionBDBundle:HistorialMedico')->findAll();

        return $this->render('ConnectionBDBundle:HistorialMedico:index.html.twig', array(
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
     * Creates a new HistorialMedico entity.
     *
     */
    public function createAction(Request $request) {

        $session = $request->getSession();
        if ($session->has("id")) {
            $entity = new HistorialMedico();
            $form = $this->createCreateForm($entity);
            $form->handleRequest($request);

            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($entity);
                $em->flush();

                return $this->redirect($this->generateUrl('historialmedico_show', array('id' => $entity->getId())));
            }

            return $this->render('ConnectionBDBundle:HistorialMedico:new.html.twig', array(
                        'entity' => $entity,
                        'form' => $form->createView(), ));
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debe estar logueado para ver este contenido' );
            return $this->redirect($this->generateUrl('login'));
        }
    }

    /**
     * Creates a form to create a HistorialMedico entity.
     *
     * @param HistorialMedico $entity The entity
     *
     * @return Form The form
     */
    private function createCreateForm(HistorialMedico $entity)
    {
        $form = $this->createForm(new HistorialMedicoType(), $entity, array(
            'action' => $this->generateUrl('historialmedico_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crear', 'attr'  => array ( 'class'  =>  'btn btn-primary btn-sm')));

        return $form;
    }

    /**
     * Displays a form to create a new HistorialMedico entity.
     *
     */
    public function newAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            $entity = new HistorialMedico();
            $form = $this->createCreateForm($entity);

            return $this->render('ConnectionBDBundle:HistorialMedico:new.html.twig', array(
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
     * Finds and displays a HistorialMedico entity.
     *
     */
    public function showAction($id,Request $request)
    {
        
            $session = $request->getSession();
        if ($session->has("id")) {
            $em = $this->getDoctrine()->getManager();

            $entity = $em->getRepository('ConnectionBDBundle:HistorialMedico')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find HistorialMedico entity.');
            }

            $deleteForm = $this->createDeleteForm($id);

            return $this->render('ConnectionBDBundle:HistorialMedico:show.html.twig', array(
                        'entity' => $entity,
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
     * Displays a form to edit an existing HistorialMedico entity.
     *
     */
    public function editAction($id, Request $request)
    {
        
            $session = $request->getSession();
        if ($session->has("id")) {
            $em = $this->getDoctrine()->getManager();

            $entity = $em->getRepository('ConnectionBDBundle:HistorialMedico')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find HistorialMedico entity.');
            }

            $editForm = $this->createEditForm($entity);
            $deleteForm = $this->createDeleteForm($id);

            return $this->render('ConnectionBDBundle:HistorialMedico:edit.html.twig', array(
                        'entity' => $entity,
                        'edit_form' => $editForm->createView(),
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
    * Creates a form to edit a HistorialMedico entity.
    *
    * @param HistorialMedico $entity The entity
    *
    * @return Form The form
    */
    private function createEditForm(HistorialMedico $entity)
    {
        $form = $this->createForm(new HistorialMedicoType(), $entity, array(
            'action' => $this->generateUrl('historialmedico_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Editar', 'attr'  => array ( 'class'  =>  'btn btn-primary btn-sm')));

        return $form;
    }
    /**
     * Edits an existing HistorialMedico entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ConnectionBDBundle:HistorialMedico')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find HistorialMedico entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('historialmedico_edit', array('id' => $id)));
        }

        return $this->render('ConnectionBDBundle:HistorialMedico:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a HistorialMedico entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ConnectionBDBundle:HistorialMedico')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find HistorialMedico entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('historialmedico'));
    }

    /**
     * Creates a form to delete a HistorialMedico entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('historialmedico_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar', 'attr'  => array ( 'class'  =>  'btn btn-primary btn-sm')))
            ->getForm()
        ;
    }
            public function pdfAction($id) {
       include ('HistorialMedicoPdf.php');
//include ('fpdf/fpdf.php');
        $pdf = new HistorialMedicoPdf();
        $pdf->pdf($id);

        return $this->redirect($this->generateUrl('vigilanciaepidemiologica'));
    }
    
    
}
