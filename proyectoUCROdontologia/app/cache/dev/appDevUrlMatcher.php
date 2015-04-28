<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

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

        // administrador_homepage
        if ($pathinfo === '/inicio') {
            return array (  '_controller' => 'AdministradorBundle\\Controller\\DefaultController::inicioAction',  '_route' => 'administrador_homepage',);
        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _demo_security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_demo_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
