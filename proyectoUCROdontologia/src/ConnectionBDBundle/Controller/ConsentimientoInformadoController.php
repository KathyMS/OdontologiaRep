<?php

namespace ConnectionBDBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use ConnectionBDBundle\Entity\ConsentimientoInformado;
use ConnectionBDBundle\Form\ConsentimientoInformadoType;

/**
 * ConsentimientoInformado controller.
 *
 */
class ConsentimientoInformadoController extends Controller
{

    /**
     * Lists all ConsentimientoInformado entities.
     *
     */
    public function indexAction()
    {
//        $em = $this->getDoctrine()->getManager();
//
//        $entities = $em->getRepository('ConnectionBDBundle:ConsentimientoInformado')->findAll();
//
//        return $this->render('ConnectionBDBundle:ConsentimientoInformado:index.html.twig', array(
//            'entities' => $entities,
//        ));
         return $this->render('ConnectionBDBundle:ConsentimientoInformado:index.html.twig'
        );
    }
    /**
     * Creates a new ConsentimientoInformado entity.
     *
     */
    
    
    public function aSubirImagenAction(Request $request) {
        if ($request->getMethod() == 'POST') {
                $descripcion = $request->get('descripcion');
                $imagen = $request->get('archivo');
                if ((!$descripcion == "") || (!$imagen == "")) {
                         $file   = $_FILES['archivo'];
                         // print_r($file);  just checking File properties

                          // File Properties
                          $file_name  = $file['name'];
                          $file_tmp   = $file['tmp_name'];
                          
                          

                            // Working With File Extension
                          $file_ext   = explode('.', $file_name);
                          $file_fname = explode('.', $file_name);

                          $file_fname = strtolower(current($file_fname));
                          $file_ext   = strtolower(end($file_ext));
                          $allowed    = array('jpg', 'jpeg', 'png');

                        if (in_array($file_ext,$allowed)) {
                            $root = getcwd();
                            move_uploaded_file($_FILES['archivo']['tmp_name'],$root.'/imagenes_consentimientos/'.$_FILES['archivo']['name']);
//                            $archivo = new Galeria();
//                            $archivo->setImagen($file_name);
//                            $archivo->setDescripcion($descripcion);
//
//                            $em = $this->getDoctrine()->getManager();
//                            $em->persist($archivo);
//                            $em->flush();
                            $message = '¡Archivo cargado correctamente!';
                            return $this->render('ConnectionBDBundle:ConsentimientoInformado:index.html.twig', array('message' => $message));
                         }//fin validadicon de formato
                         else {
                             $error = '¡Informato incorrecto!';
                             return $this->render('ConnectionBDBundle:ConsentimientoInformado:index.html.twig', array('error' => $error));
                         }
                }//fin validacion campos vacios
                else {
                    $error = '¡Por favor complete todos los espacios solicitados!';
                    return $this->render('ConnectionBDBundle:ConsentimientoInformado:index.html.twig', array('error' => $error));
            }//else error
        }
        return $this->render('ConnectionBDBundle:ConsentimientoInformado:index.html.twig');
    }

    
    
    public function createAction(Request $request)
    {
        $entity = new ConsentimientoInformado();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('consentimientoinformado_show', array('id' => $entity->getId())));
        }

        return $this->render('ConnectionBDBundle:ConsentimientoInformado:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a ConsentimientoInformado entity.
     *
     * @param ConsentimientoInformado $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(ConsentimientoInformado $entity)
    {
        $form = $this->createForm(new ConsentimientoInformadoType(), $entity, array(
            'action' => $this->generateUrl('consentimientoinformado_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new ConsentimientoInformado entity.
     *
     */
    public function newAction()
    {
        $entity = new ConsentimientoInformado();
        $form   = $this->createCreateForm($entity);

        return $this->render('ConnectionBDBundle:ConsentimientoInformado:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ConsentimientoInformado entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ConnectionBDBundle:ConsentimientoInformado')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ConsentimientoInformado entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ConnectionBDBundle:ConsentimientoInformado:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ConsentimientoInformado entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ConnectionBDBundle:ConsentimientoInformado')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ConsentimientoInformado entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ConnectionBDBundle:ConsentimientoInformado:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a ConsentimientoInformado entity.
    *
    * @param ConsentimientoInformado $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(ConsentimientoInformado $entity)
    {
        $form = $this->createForm(new ConsentimientoInformadoType(), $entity, array(
            'action' => $this->generateUrl('consentimientoinformado_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing ConsentimientoInformado entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ConnectionBDBundle:ConsentimientoInformado')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ConsentimientoInformado entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('consentimientoinformado_edit', array('id' => $id)));
        }

        return $this->render('ConnectionBDBundle:ConsentimientoInformado:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a ConsentimientoInformado entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ConnectionBDBundle:ConsentimientoInformado')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ConsentimientoInformado entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('consentimientoinformado'));
    }

    /**
     * Creates a form to delete a ConsentimientoInformado entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('consentimientoinformado_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
