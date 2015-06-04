<?php

namespace ConnectionBDBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use ConnectionBDBundle\Entity\Encargado;
use ConnectionBDBundle\Form\EncargadoType;

/**
 * Encargado controller.
 *
 */
class EncargadoController extends Controller
{

    /**
     * Lists all Encargado entities.
     *
     */
    public function indexAction(Request $request)
    {
        $session=$request->getSession();
        if($session->has("id")){
             $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ConnectionBDBundle:Encargado')->findAll();

        return $this->render('ConnectionBDBundle:Encargado:index.html.twig', array(
            'entities' => $entities,
        ));
        }else{
             $this->get('session')->getFlashBag()->add(
                   'mensaje',
                   'Debe estar logueado para ver este contenido'
           );
               return $this->redirect($this->generateUrl('login'));
        }
       
    }
    /**
     * Creates a new Encargado entity.
     *
     */
    public function createAction(Request $request)
    {
        
            $session=$request->getSession();
        if($session->has("id")){
          $entity = new Encargado();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('encargado_show', array('id' => $entity->getId())));
        }

        return $this->render('ConnectionBDBundle:Encargado:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),));
        }else{
             $this->get('session')->getFlashBag()->add(
                   'mensaje',
                   'Debe estar logueado para ver este contenido');
               return $this->redirect($this->generateUrl('login'));
        }
        
    }

    /**
     * Creates a form to create a Encargado entity.
     *
     * @param Encargado $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Encargado $entity)
    {
        $form = $this->createForm(new EncargadoType(), $entity, array(
            'action' => $this->generateUrl('encargado_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Encargado entity.
     *
     */
    public function newAction(Request $request)
    {
            $session=$request->getSession();
        if($session->has("id")){
          $entity = new Encargado();
        $form   = $this->createCreateForm($entity);

        return $this->render('ConnectionBDBundle:Encargado:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
        }else{
             $this->get('session')->getFlashBag()->add(
                   'mensaje',
                   'Debe estar logueado para ver este contenido'
           );
               return $this->redirect($this->generateUrl('login'));
        }
        
    }

    /**
     * Finds and displays a Encargado entity.
     *
     */
    public function showAction($id,Request $request)
    {
         $session = $request->getSession();
        if ($session->has("id")) {
            $em = $this->getDoctrine()->getManager();

            $entity = $em->getRepository('ConnectionBDBundle:Encargado')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Encargado entity.');
            }

            $deleteForm = $this->createDeleteForm($id);

            return $this->render('ConnectionBDBundle:Encargado:show.html.twig', array(
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
     * Displays a form to edit an existing Encargado entity.
     *
     */
    public function editAction($id,Request $request)
    {
           $session = $request->getSession();
        if ($session->has("id")) {
           $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ConnectionBDBundle:Encargado')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Encargado entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ConnectionBDBundle:Encargado:edit.html.twig', array(
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
    * Creates a form to edit a Encargado entity.
    *
    * @param Encargado $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Encargado $entity)
    {
        $form = $this->createForm(new EncargadoType(), $entity, array(
            'action' => $this->generateUrl('encargado_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Encargado entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ConnectionBDBundle:Encargado')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Encargado entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('encargado_edit', array('id' => $id)));
        }

        return $this->render('ConnectionBDBundle:Encargado:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Encargado entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ConnectionBDBundle:Encargado')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Encargado entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('encargado'));
    }

    /**
     * Creates a form to delete a Encargado entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('encargado_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
