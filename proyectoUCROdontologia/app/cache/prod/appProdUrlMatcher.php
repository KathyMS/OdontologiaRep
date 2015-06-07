<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/cita')) {
            // cita
            if (rtrim($pathinfo, '/') === '/cita') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'cita');
                }

                return array (  '_controller' => 'ConnectionBDBundle\\Controller\\CitaController::indexAction',  '_route' => 'cita',);
            }

            // cita_show
            if (preg_match('#^/cita/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cita_show')), array (  '_controller' => 'ConnectionBDBundle\\Controller\\CitaController::showAction',));
            }

            // cita_new
            if ($pathinfo === '/cita/new') {
                return array (  '_controller' => 'ConnectionBDBundle\\Controller\\CitaController::newAction',  '_route' => 'cita_new',);
            }

            // cita_create
            if ($pathinfo === '/cita/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_cita_create;
                }

                return array (  '_controller' => 'ConnectionBDBundle\\Controller\\CitaController::createAction',  '_route' => 'cita_create',);
            }
            not_cita_create:

            // cita_edit
            if (preg_match('#^/cita/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cita_edit')), array (  '_controller' => 'ConnectionBDBundle\\Controller\\CitaController::editAction',));
            }

            // cita_update
            if (preg_match('#^/cita/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_cita_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cita_update')), array (  '_controller' => 'ConnectionBDBundle\\Controller\\CitaController::updateAction',));
            }
            not_cita_update:

            // cita_delete
            if (preg_match('#^/cita/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_cita_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cita_delete')), array (  '_controller' => 'ConnectionBDBundle\\Controller\\CitaController::deleteAction',));
            }
            not_cita_delete:

        }

        if (0 === strpos($pathinfo, '/vigilanciaepidemiologica')) {
            // vigilanciaepidemiologica
            if (rtrim($pathinfo, '/') === '/vigilanciaepidemiologica') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'vigilanciaepidemiologica');
                }

                return array (  '_controller' => 'ConnectionBDBundle\\Controller\\VigilanciaEpidemiologicaController::indexAction',  '_route' => 'vigilanciaepidemiologica',);
            }

            // vigilanciaepidemiologica_show
            if (preg_match('#^/vigilanciaepidemiologica/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vigilanciaepidemiologica_show')), array (  '_controller' => 'ConnectionBDBundle\\Controller\\VigilanciaEpidemiologicaController::showAction',));
            }

            // vigilanciaepidemiologica_new
            if ($pathinfo === '/vigilanciaepidemiologica/new') {
                return array (  '_controller' => 'ConnectionBDBundle\\Controller\\VigilanciaEpidemiologicaController::newAction',  '_route' => 'vigilanciaepidemiologica_new',);
            }

            // vigilanciaepidemiologica_create
            if ($pathinfo === '/vigilanciaepidemiologica/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_vigilanciaepidemiologica_create;
                }

                return array (  '_controller' => 'ConnectionBDBundle\\Controller\\VigilanciaEpidemiologicaController::createAction',  '_route' => 'vigilanciaepidemiologica_create',);
            }
            not_vigilanciaepidemiologica_create:

            // vigilanciaepidemiologica_edit
            if (preg_match('#^/vigilanciaepidemiologica/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vigilanciaepidemiologica_edit')), array (  '_controller' => 'ConnectionBDBundle\\Controller\\VigilanciaEpidemiologicaController::editAction',));
            }

            // vigilanciaepidemiologica_update
            if (preg_match('#^/vigilanciaepidemiologica/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_vigilanciaepidemiologica_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vigilanciaepidemiologica_update')), array (  '_controller' => 'ConnectionBDBundle\\Controller\\VigilanciaEpidemiologicaController::updateAction',));
            }
            not_vigilanciaepidemiologica_update:

            // vigilanciaepidemiologica_delete
            if (preg_match('#^/vigilanciaepidemiologica/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_vigilanciaepidemiologica_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'vigilanciaepidemiologica_delete')), array (  '_controller' => 'ConnectionBDBundle\\Controller\\VigilanciaEpidemiologicaController::deleteAction',));
            }
            not_vigilanciaepidemiologica_delete:

        }

        if (0 === strpos($pathinfo, '/examenradiologico')) {
            // examenradiologico
            if (rtrim($pathinfo, '/') === '/examenradiologico') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'examenradiologico');
                }

                return array (  '_controller' => 'ConnectionBDBundle\\Controller\\ExamenRadiologicoController::indexAction',  '_route' => 'examenradiologico',);
            }

            // examenradiologico_show
            if (preg_match('#^/examenradiologico/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'examenradiologico_show')), array (  '_controller' => 'ConnectionBDBundle\\Controller\\ExamenRadiologicoController::showAction',));
            }

            // examenradiologico_new
            if ($pathinfo === '/examenradiologico/new') {
                return array (  '_controller' => 'ConnectionBDBundle\\Controller\\ExamenRadiologicoController::newAction',  '_route' => 'examenradiologico_new',);
            }

            // examenradiologico_create
            if ($pathinfo === '/examenradiologico/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_examenradiologico_create;
                }

                return array (  '_controller' => 'ConnectionBDBundle\\Controller\\ExamenRadiologicoController::createAction',  '_route' => 'examenradiologico_create',);
            }
            not_examenradiologico_create:

            // examenradiologico_edit
            if (preg_match('#^/examenradiologico/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'examenradiologico_edit')), array (  '_controller' => 'ConnectionBDBundle\\Controller\\ExamenRadiologicoController::editAction',));
            }

            // examenradiologico_update
            if (preg_match('#^/examenradiologico/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_examenradiologico_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'examenradiologico_update')), array (  '_controller' => 'ConnectionBDBundle\\Controller\\ExamenRadiologicoController::updateAction',));
            }
            not_examenradiologico_update:

            // examenradiologico_delete
            if (preg_match('#^/examenradiologico/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_examenradiologico_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'examenradiologico_delete')), array (  '_controller' => 'ConnectionBDBundle\\Controller\\ExamenRadiologicoController::deleteAction',));
            }
            not_examenradiologico_delete:

        }

        if (0 === strpos($pathinfo, '/historialmedico')) {
            // historialmedico
            if (rtrim($pathinfo, '/') === '/historialmedico') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'historialmedico');
                }

                return array (  '_controller' => 'ConnectionBDBundle\\Controller\\HistorialMedicoController::indexAction',  '_route' => 'historialmedico',);
            }

            // historialmedico_show
            if (preg_match('#^/historialmedico/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'historialmedico_show')), array (  '_controller' => 'ConnectionBDBundle\\Controller\\HistorialMedicoController::showAction',));
            }

            // historialmedico_new
            if ($pathinfo === '/historialmedico/new') {
                return array (  '_controller' => 'ConnectionBDBundle\\Controller\\HistorialMedicoController::newAction',  '_route' => 'historialmedico_new',);
            }

            // historialmedico_create
            if ($pathinfo === '/historialmedico/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_historialmedico_create;
                }

                return array (  '_controller' => 'ConnectionBDBundle\\Controller\\HistorialMedicoController::createAction',  '_route' => 'historialmedico_create',);
            }
            not_historialmedico_create:

            // historialmedico_edit
            if (preg_match('#^/historialmedico/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'historialmedico_edit')), array (  '_controller' => 'ConnectionBDBundle\\Controller\\HistorialMedicoController::editAction',));
            }

            // historialmedico_update
            if (preg_match('#^/historialmedico/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_historialmedico_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'historialmedico_update')), array (  '_controller' => 'ConnectionBDBundle\\Controller\\HistorialMedicoController::updateAction',));
            }
            not_historialmedico_update:

            // historialmedico_delete
            if (preg_match('#^/historialmedico/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_historialmedico_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'historialmedico_delete')), array (  '_controller' => 'ConnectionBDBundle\\Controller\\HistorialMedicoController::deleteAction',));
            }
            not_historialmedico_delete:

        }

        if (0 === strpos($pathinfo, '/p')) {
            if (0 === strpos($pathinfo, '/plandetratamiento')) {
                // plandetratamiento
                if (rtrim($pathinfo, '/') === '/plandetratamiento') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'plandetratamiento');
                    }

                    return array (  '_controller' => 'ConnectionBDBundle\\Controller\\PlanDeTratamientoController::indexAction',  '_route' => 'plandetratamiento',);
                }

                // plandetratamiento_show
                if (preg_match('#^/plandetratamiento/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'plandetratamiento_show')), array (  '_controller' => 'ConnectionBDBundle\\Controller\\PlanDeTratamientoController::showAction',));
                }

                // plandetratamiento_new
                if ($pathinfo === '/plandetratamiento/new') {
                    return array (  '_controller' => 'ConnectionBDBundle\\Controller\\PlanDeTratamientoController::newAction',  '_route' => 'plandetratamiento_new',);
                }

                // plandetratamiento_create
                if ($pathinfo === '/plandetratamiento/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_plandetratamiento_create;
                    }

                    return array (  '_controller' => 'ConnectionBDBundle\\Controller\\PlanDeTratamientoController::createAction',  '_route' => 'plandetratamiento_create',);
                }
                not_plandetratamiento_create:

                // plandetratamiento_edit
                if (preg_match('#^/plandetratamiento/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'plandetratamiento_edit')), array (  '_controller' => 'ConnectionBDBundle\\Controller\\PlanDeTratamientoController::editAction',));
                }

                // plandetratamiento_update
                if (preg_match('#^/plandetratamiento/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_plandetratamiento_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'plandetratamiento_update')), array (  '_controller' => 'ConnectionBDBundle\\Controller\\PlanDeTratamientoController::updateAction',));
                }
                not_plandetratamiento_update:

                // plandetratamiento_delete
                if (preg_match('#^/plandetratamiento/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_plandetratamiento_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'plandetratamiento_delete')), array (  '_controller' => 'ConnectionBDBundle\\Controller\\PlanDeTratamientoController::deleteAction',));
                }
                not_plandetratamiento_delete:

            }

            if (0 === strpos($pathinfo, '/paciente')) {
                // paciente
                if (rtrim($pathinfo, '/') === '/paciente') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'paciente');
                    }

                    return array (  '_controller' => 'ConnectionBDBundle\\Controller\\PacienteController::indexAction',  '_route' => 'paciente',);
                }

                // paciente_show
                if (preg_match('#^/paciente/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'paciente_show')), array (  '_controller' => 'ConnectionBDBundle\\Controller\\PacienteController::showAction',));
                }

                // paciente_new
                if ($pathinfo === '/paciente/new') {
                    return array (  '_controller' => 'ConnectionBDBundle\\Controller\\PacienteController::newAction',  '_route' => 'paciente_new',);
                }

                // paciente_create
                if ($pathinfo === '/paciente/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_paciente_create;
                    }

                    return array (  '_controller' => 'ConnectionBDBundle\\Controller\\PacienteController::createAction',  '_route' => 'paciente_create',);
                }
                not_paciente_create:

                // paciente_edit
                if (preg_match('#^/paciente/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'paciente_edit')), array (  '_controller' => 'ConnectionBDBundle\\Controller\\PacienteController::editAction',));
                }

                // paciente_update
                if (preg_match('#^/paciente/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_paciente_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'paciente_update')), array (  '_controller' => 'ConnectionBDBundle\\Controller\\PacienteController::updateAction',));
                }
                not_paciente_update:

                // paciente_delete
                if (preg_match('#^/paciente/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_paciente_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'paciente_delete')), array (  '_controller' => 'ConnectionBDBundle\\Controller\\PacienteController::deleteAction',));
                }
                not_paciente_delete:

            }

        }

        if (0 === strpos($pathinfo, '/expediente')) {
            // expediente
            if (rtrim($pathinfo, '/') === '/expediente') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'expediente');
                }

                return array (  '_controller' => 'ConnectionBDBundle\\Controller\\ExpedienteController::indexAction',  '_route' => 'expediente',);
            }

            // expediente_show
            if (preg_match('#^/expediente/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'expediente_show')), array (  '_controller' => 'ConnectionBDBundle\\Controller\\ExpedienteController::showAction',));
            }

            // expediente_new
            if ($pathinfo === '/expediente/new') {
                return array (  '_controller' => 'ConnectionBDBundle\\Controller\\ExpedienteController::newAction',  '_route' => 'expediente_new',);
            }

            // expediente_create
            if ($pathinfo === '/expediente/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_expediente_create;
                }

                return array (  '_controller' => 'ConnectionBDBundle\\Controller\\ExpedienteController::createAction',  '_route' => 'expediente_create',);
            }
            not_expediente_create:

            // expediente_edit
            if (preg_match('#^/expediente/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'expediente_edit')), array (  '_controller' => 'ConnectionBDBundle\\Controller\\ExpedienteController::editAction',));
            }

            // expediente_update
            if (preg_match('#^/expediente/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_expediente_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'expediente_update')), array (  '_controller' => 'ConnectionBDBundle\\Controller\\ExpedienteController::updateAction',));
            }
            not_expediente_update:

            // expediente_delete
            if (preg_match('#^/expediente/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_expediente_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'expediente_delete')), array (  '_controller' => 'ConnectionBDBundle\\Controller\\ExpedienteController::deleteAction',));
            }
            not_expediente_delete:

        }

        if (0 === strpos($pathinfo, '/tratamientogeneral')) {
            // tratamientogeneral
            if (rtrim($pathinfo, '/') === '/tratamientogeneral') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'tratamientogeneral');
                }

                return array (  '_controller' => 'ConnectionBDBundle\\Controller\\TratamientoGeneralController::indexAction',  '_route' => 'tratamientogeneral',);
            }

            // tratamientogeneral_show
            if (preg_match('#^/tratamientogeneral/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tratamientogeneral_show')), array (  '_controller' => 'ConnectionBDBundle\\Controller\\TratamientoGeneralController::showAction',));
            }

            // tratamientogeneral_new
            if ($pathinfo === '/tratamientogeneral/new') {
                return array (  '_controller' => 'ConnectionBDBundle\\Controller\\TratamientoGeneralController::newAction',  '_route' => 'tratamientogeneral_new',);
            }

            // tratamientogeneral_create
            if ($pathinfo === '/tratamientogeneral/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_tratamientogeneral_create;
                }

                return array (  '_controller' => 'ConnectionBDBundle\\Controller\\TratamientoGeneralController::createAction',  '_route' => 'tratamientogeneral_create',);
            }
            not_tratamientogeneral_create:

            // tratamientogeneral_edit
            if (preg_match('#^/tratamientogeneral/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tratamientogeneral_edit')), array (  '_controller' => 'ConnectionBDBundle\\Controller\\TratamientoGeneralController::editAction',));
            }

            // tratamientogeneral_update
            if (preg_match('#^/tratamientogeneral/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_tratamientogeneral_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tratamientogeneral_update')), array (  '_controller' => 'ConnectionBDBundle\\Controller\\TratamientoGeneralController::updateAction',));
            }
            not_tratamientogeneral_update:

            // tratamientogeneral_delete
            if (preg_match('#^/tratamientogeneral/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_tratamientogeneral_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tratamientogeneral_delete')), array (  '_controller' => 'ConnectionBDBundle\\Controller\\TratamientoGeneralController::deleteAction',));
            }
            not_tratamientogeneral_delete:

        }

        // connection_bd_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'connection_bd_homepage')), array (  '_controller' => 'ConnectionBDBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/odontologo')) {
            // odontologo
            if (rtrim($pathinfo, '/') === '/odontologo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'odontologo');
                }

                return array (  '_controller' => 'ConnectionBDBundle\\Controller\\OdontologoController::indexAction',  '_route' => 'odontologo',);
            }

            // odontologo_show
            if (preg_match('#^/odontologo/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'odontologo_show')), array (  '_controller' => 'ConnectionBDBundle\\Controller\\OdontologoController::showAction',));
            }

            // odontologo_new
            if ($pathinfo === '/odontologo/new') {
                return array (  '_controller' => 'ConnectionBDBundle\\Controller\\OdontologoController::newAction',  '_route' => 'odontologo_new',);
            }

            // odontologo_create
            if ($pathinfo === '/odontologo/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_odontologo_create;
                }

                return array (  '_controller' => 'ConnectionBDBundle\\Controller\\OdontologoController::createAction',  '_route' => 'odontologo_create',);
            }
            not_odontologo_create:

            // odontologo_edit
            if (preg_match('#^/odontologo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'odontologo_edit')), array (  '_controller' => 'ConnectionBDBundle\\Controller\\OdontologoController::editAction',));
            }

            // odontologo_update
            if (preg_match('#^/odontologo/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_odontologo_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'odontologo_update')), array (  '_controller' => 'ConnectionBDBundle\\Controller\\OdontologoController::updateAction',));
            }
            not_odontologo_update:

            // odontologo_delete
            if (preg_match('#^/odontologo/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_odontologo_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'odontologo_delete')), array (  '_controller' => 'ConnectionBDBundle\\Controller\\OdontologoController::deleteAction',));
            }
            not_odontologo_delete:

        }

        if (0 === strpos($pathinfo, '/encargado')) {
            // encargado
            if (rtrim($pathinfo, '/') === '/encargado') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'encargado');
                }

                return array (  '_controller' => 'ConnectionBDBundle\\Controller\\EncargadoController::indexAction',  '_route' => 'encargado',);
            }

            // encargado_show
            if (preg_match('#^/encargado/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'encargado_show')), array (  '_controller' => 'ConnectionBDBundle\\Controller\\EncargadoController::showAction',));
            }

            // encargado_new
            if ($pathinfo === '/encargado/new') {
                return array (  '_controller' => 'ConnectionBDBundle\\Controller\\EncargadoController::newAction',  '_route' => 'encargado_new',);
            }

            // encargado_create
            if ($pathinfo === '/encargado/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_encargado_create;
                }

                return array (  '_controller' => 'ConnectionBDBundle\\Controller\\EncargadoController::createAction',  '_route' => 'encargado_create',);
            }
            not_encargado_create:

            // encargado_edit
            if (preg_match('#^/encargado/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'encargado_edit')), array (  '_controller' => 'ConnectionBDBundle\\Controller\\EncargadoController::editAction',));
            }

            // encargado_update
            if (preg_match('#^/encargado/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_encargado_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'encargado_update')), array (  '_controller' => 'ConnectionBDBundle\\Controller\\EncargadoController::updateAction',));
            }
            not_encargado_update:

            // encargado_delete
            if (preg_match('#^/encargado/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_encargado_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'encargado_delete')), array (  '_controller' => 'ConnectionBDBundle\\Controller\\EncargadoController::deleteAction',));
            }
            not_encargado_delete:

        }

        // estudiante_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'estudiante_homepage')), array (  '_controller' => 'EstudianteBundle\\Controller\\DefaultController::indexAction',));
        }

        // inicio
        if ($pathinfo === '/inicio') {
            return array (  '_controller' => 'AdministradorBundle\\Controller\\DefaultController::inicioAction',  '_route' => 'inicio',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            // login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'AdministradorBundle\\Controller\\DefaultController::loginAction',  '_route' => 'login',);
            }

            // logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'AdministradorBundle\\Controller\\DefaultController::logoutAction',  '_route' => 'logout',);
            }

        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
