<?php

namespace ConnectionBDBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use ConnectionBDBundle\Entity\VigilanciaEpidemiologica;
use ConnectionBDBundle\Form\VigilanciaEpidemiologicaType;

/**
 * VigilanciaEpidemiologica controller.
 *
 */
class VigilanciaEpidemiologicaController extends Controller
{

    /**
     * Lists all VigilanciaEpidemiologica entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ConnectionBDBundle:VigilanciaEpidemiologica')->findAll();

        return $this->render('ConnectionBDBundle:VigilanciaEpidemiologica:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new VigilanciaEpidemiologica entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new VigilanciaEpidemiologica();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('vigilanciaepidemiologica_show', array('id' => $entity->getId())));
        }

        return $this->render('ConnectionBDBundle:VigilanciaEpidemiologica:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a VigilanciaEpidemiologica entity.
     *
     * @param VigilanciaEpidemiologica $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(VigilanciaEpidemiologica $entity)
    {
        $form = $this->createForm(new VigilanciaEpidemiologicaType(), $entity, array(
            'action' => $this->generateUrl('vigilanciaepidemiologica_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Crear'));

        return $form;
    }

    /**
     * Displays a form to create a new VigilanciaEpidemiologica entity.
     *
     */
    public function newAction()
    {
        $entity = new VigilanciaEpidemiologica();
        $form   = $this->createCreateForm($entity);

        return $this->render('ConnectionBDBundle:VigilanciaEpidemiologica:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a VigilanciaEpidemiologica entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ConnectionBDBundle:VigilanciaEpidemiologica')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find VigilanciaEpidemiologica entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ConnectionBDBundle:VigilanciaEpidemiologica:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing VigilanciaEpidemiologica entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ConnectionBDBundle:VigilanciaEpidemiologica')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find VigilanciaEpidemiologica entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ConnectionBDBundle:VigilanciaEpidemiologica:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a VigilanciaEpidemiologica entity.
    *
    * @param VigilanciaEpidemiologica $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(VigilanciaEpidemiologica $entity)
    {
        $form = $this->createForm(new VigilanciaEpidemiologicaType(), $entity, array(
            'action' => $this->generateUrl('vigilanciaepidemiologica_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Actualizar'));

        return $form;
    }
    /**
     * Edits an existing VigilanciaEpidemiologica entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ConnectionBDBundle:VigilanciaEpidemiologica')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find VigilanciaEpidemiologica entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('vigilanciaepidemiologica_edit', array('id' => $id)));
        }

        return $this->render('ConnectionBDBundle:VigilanciaEpidemiologica:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a VigilanciaEpidemiologica entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ConnectionBDBundle:VigilanciaEpidemiologica')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find VigilanciaEpidemiologica entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('vigilanciaepidemiologica'));
    }

    /**
     * Creates a form to delete a VigilanciaEpidemiologica entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('vigilanciaepidemiologica_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Eliminar'))
            ->getForm()
        ;
    }
}
=======
<?php

namespace ConnectionBDBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use ConnectionBDBundle\Entity\VigilanciaEpidemiologica;
use ConnectionBDBundle\Form\VigilanciaEpidemiologicaType;

/**
 * VigilanciaEpidemiologica controller.
 *
 */
class VigilanciaEpidemiologicaController extends Controller
{

    /**
     * Lists all VigilanciaEpidemiologica entities.
     *
     */
    public function indexAction(Request $request)
    {
        $session = $request->getSession();
        if ($session->has("id")) {
            $em = $this->getDoctrine()->getManager();

            $entities = $em->getRepository('ConnectionBDBundle:VigilanciaEpidemiologica')->findAll();

            return $this->render('ConnectionBDBundle:VigilanciaEpidemiologica:index.html.twig', array(
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
     * Creates a new VigilanciaEpidemiologica entity.
     *
     */
    public function createAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            $entity = new VigilanciaEpidemiologica();
            $form = $this->createCreateForm($entity);
            $form->handleRequest($request);

            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($entity);
                $em->flush();

                return $this->redirect($this->generateUrl('vigilanciaepidemiologica_show', array('id' => $entity->getId())));
            }

            return $this->render('ConnectionBDBundle:VigilanciaEpidemiologica:new.html.twig', array(
                        'entity' => $entity,
                        'form' => $form->createView(),));
        } else {
            $this->get('session')->getFlashBag()->add(
                    'mensaje', 'Debe estar logueado para ver este contenido');
            return $this->redirect($this->generateUrl('login'));
        }
    }

    /**
     * Creates a form to create a VigilanciaEpidemiologica entity.
     *
     * @param VigilanciaEpidemiologica $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(VigilanciaEpidemiologica $entity)
    {
        $form = $this->createForm(new VigilanciaEpidemiologicaType(), $entity, array(
            'action' => $this->generateUrl('vigilanciaepidemiologica_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new VigilanciaEpidemiologica entity.
     *
     */
    public function newAction(Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            $entity = new VigilanciaEpidemiologica();
            $form = $this->createCreateForm($entity);

            return $this->render('ConnectionBDBundle:VigilanciaEpidemiologica:new.html.twig', array(
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
     * Finds and displays a VigilanciaEpidemiologica entity.
     *
     */
    public function showAction($id, Request $request) {
        $session = $request->getSession();
        if ($session->has("id")) {
            $em = $this->getDoctrine()->getManager();

            $entity = $em->getRepository('ConnectionBDBundle:VigilanciaEpidemiologica')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find VigilanciaEpidemiologica entity.');
            }

            $deleteForm = $this->createDeleteForm($id);

            return $this->render('ConnectionBDBundle:VigilanciaEpidemiologica:show.html.twig', array(
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
     * Displays a form to edit an existing VigilanciaEpidemiologica entity.
     *
     */
    public function editAction($id,Request $request)
    {
            $session = $request->getSession();
        if ($session->has("id")) {
            $em = $this->getDoctrine()->getManager();

            $entity = $em->getRepository('ConnectionBDBundle:VigilanciaEpidemiologica')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find VigilanciaEpidemiologica entity.');
            }

            $editForm = $this->createEditForm($entity);
            $deleteForm = $this->createDeleteForm($id);

            return $this->render('ConnectionBDBundle:VigilanciaEpidemiologica:edit.html.twig', array(
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
    * Creates a form to edit a VigilanciaEpidemiologica entity.
    *
    * @param VigilanciaEpidemiologica $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(VigilanciaEpidemiologica $entity)
    {
        $form = $this->createForm(new VigilanciaEpidemiologicaType(), $entity, array(
            'action' => $this->generateUrl('vigilanciaepidemiologica_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing VigilanciaEpidemiologica entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ConnectionBDBundle:VigilanciaEpidemiologica')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find VigilanciaEpidemiologica entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('vigilanciaepidemiologica_edit', array('id' => $id)));
        }

        return $this->render('ConnectionBDBundle:VigilanciaEpidemiologica:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a VigilanciaEpidemiologica entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ConnectionBDBundle:VigilanciaEpidemiologica')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find VigilanciaEpidemiologica entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('vigilanciaepidemiologica'));
    }

    /**
     * Creates a form to delete a VigilanciaEpidemiologica entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('vigilanciaepidemiologica_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
>>>>>>> restricciones_de_acceso
