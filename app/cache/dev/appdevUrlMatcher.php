<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $pathinfo = urldecode($pathinfo);

        // _wdt
        if (preg_match('#^/_wdt/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+?)\\.txt$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)/search/results$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
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
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        if (0 === strpos($pathinfo, '/siebel')) {
            // bdd
            if ($pathinfo === '/siebel/bdd') {
                return array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\BddController::indexAction',  '_route' => 'bdd',);
            }

            // bdd_show
            if (0 === strpos($pathinfo, '/siebel/bdd') && preg_match('#^/siebel/bdd/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\BddController::showAction',)), array('_route' => 'bdd_show'));
            }

            // bdd_new
            if ($pathinfo === '/siebel/bdd/new') {
                return array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\BddController::newAction',  '_route' => 'bdd_new',);
            }

            // bdd_create
            if ($pathinfo === '/siebel/bdd/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_bdd_create;
                }
                return array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\BddController::createAction',  '_route' => 'bdd_create',);
            }
            not_bdd_create:

            // bdd_edit
            if (0 === strpos($pathinfo, '/siebel/bdd') && preg_match('#^/siebel/bdd/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\BddController::editAction',)), array('_route' => 'bdd_edit'));
            }

            // bdd_update
            if (0 === strpos($pathinfo, '/siebel/bdd') && preg_match('#^/siebel/bdd/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_bdd_update;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\BddController::updateAction',)), array('_route' => 'bdd_update'));
            }
            not_bdd_update:

            // bdd_delete
            if (0 === strpos($pathinfo, '/siebel/bdd') && preg_match('#^/siebel/bdd/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_bdd_delete;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\BddController::deleteAction',)), array('_route' => 'bdd_delete'));
            }
            not_bdd_delete:

            // contexte
            if (rtrim($pathinfo, '/') === '/siebel/contxt') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'contexte');
                }
                return array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\ContexteController::indexAction',  '_route' => 'contexte',);
            }

            // contexte_show
            if (0 === strpos($pathinfo, '/siebel/contxt') && preg_match('#^/siebel/contxt/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\ContexteController::showAction',)), array('_route' => 'contexte_show'));
            }

            // contexte_new
            if ($pathinfo === '/siebel/contxt/new') {
                return array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\ContexteController::newAction',  '_route' => 'contexte_new',);
            }

            // contexte_create
            if ($pathinfo === '/siebel/contxt/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_contexte_create;
                }
                return array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\ContexteController::createAction',  '_route' => 'contexte_create',);
            }
            not_contexte_create:

            // contexte_edit
            if (0 === strpos($pathinfo, '/siebel/contxt') && preg_match('#^/siebel/contxt/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\ContexteController::editAction',)), array('_route' => 'contexte_edit'));
            }

            // contexte_update
            if (0 === strpos($pathinfo, '/siebel/contxt') && preg_match('#^/siebel/contxt/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_contexte_update;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\ContexteController::updateAction',)), array('_route' => 'contexte_update'));
            }
            not_contexte_update:

            // contexte_delete
            if (0 === strpos($pathinfo, '/siebel/contxt') && preg_match('#^/siebel/contxt/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_contexte_delete;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\ContexteController::deleteAction',)), array('_route' => 'contexte_delete'));
            }
            not_contexte_delete:

            // es
            if (rtrim($pathinfo, '/') === '/siebel/es') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'es');
                }
                return array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\EnterpriseServerController::indexAction',  '_route' => 'es',);
            }

            // es_show
            if (0 === strpos($pathinfo, '/siebel/es') && preg_match('#^/siebel/es/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\EnterpriseServerController::showAction',)), array('_route' => 'es_show'));
            }

            // es_new
            if ($pathinfo === '/siebel/es/new') {
                return array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\EnterpriseServerController::newAction',  '_route' => 'es_new',);
            }

            // es_create
            if ($pathinfo === '/siebel/es/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_es_create;
                }
                return array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\EnterpriseServerController::createAction',  '_route' => 'es_create',);
            }
            not_es_create:

            // es_edit
            if (0 === strpos($pathinfo, '/siebel/es') && preg_match('#^/siebel/es/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\EnterpriseServerController::editAction',)), array('_route' => 'es_edit'));
            }

            // es_update
            if (0 === strpos($pathinfo, '/siebel/es') && preg_match('#^/siebel/es/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_es_update;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\EnterpriseServerController::updateAction',)), array('_route' => 'es_update'));
            }
            not_es_update:

            // es_delete
            if (0 === strpos($pathinfo, '/siebel/es') && preg_match('#^/siebel/es/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_es_delete;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\EnterpriseServerController::deleteAction',)), array('_route' => 'es_delete'));
            }
            not_es_delete:

            // env
            if (rtrim($pathinfo, '/') === '/siebel/env') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'env');
                }
                return array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\EnvironnementController::indexAction',  '_route' => 'env',);
            }

            // env_show
            if (0 === strpos($pathinfo, '/siebel/env') && preg_match('#^/siebel/env/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\EnvironnementController::showAction',)), array('_route' => 'env_show'));
            }

            // env_new
            if ($pathinfo === '/siebel/env/new') {
                return array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\EnvironnementController::newAction',  '_route' => 'env_new',);
            }

            // env_create
            if ($pathinfo === '/siebel/env/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_env_create;
                }
                return array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\EnvironnementController::createAction',  '_route' => 'env_create',);
            }
            not_env_create:

            // env_edit
            if (0 === strpos($pathinfo, '/siebel/env') && preg_match('#^/siebel/env/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\EnvironnementController::editAction',)), array('_route' => 'env_edit'));
            }

            // env_update
            if (0 === strpos($pathinfo, '/siebel/env') && preg_match('#^/siebel/env/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_env_update;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\EnvironnementController::updateAction',)), array('_route' => 'env_update'));
            }
            not_env_update:

            // env_delete
            if (0 === strpos($pathinfo, '/siebel/env') && preg_match('#^/siebel/env/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_env_delete;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\EnvironnementController::deleteAction',)), array('_route' => 'env_delete'));
            }
            not_env_delete:

            // gtw
            if (rtrim($pathinfo, '/') === '/siebel/gtw') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'gtw');
                }
                return array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\GatewayController::indexAction',  '_route' => 'gtw',);
            }

            // gtw_show
            if (0 === strpos($pathinfo, '/siebel/gtw') && preg_match('#^/siebel/gtw/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\GatewayController::showAction',)), array('_route' => 'gtw_show'));
            }

            // gtw_new
            if ($pathinfo === '/siebel/gtw/new') {
                return array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\GatewayController::newAction',  '_route' => 'gtw_new',);
            }

            // gtw_create
            if ($pathinfo === '/siebel/gtw/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_gtw_create;
                }
                return array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\GatewayController::createAction',  '_route' => 'gtw_create',);
            }
            not_gtw_create:

            // gtw_edit
            if (0 === strpos($pathinfo, '/siebel/gtw') && preg_match('#^/siebel/gtw/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\GatewayController::editAction',)), array('_route' => 'gtw_edit'));
            }

            // gtw_update
            if (0 === strpos($pathinfo, '/siebel/gtw') && preg_match('#^/siebel/gtw/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_gtw_update;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\GatewayController::updateAction',)), array('_route' => 'gtw_update'));
            }
            not_gtw_update:

            // gtw_delete
            if (0 === strpos($pathinfo, '/siebel/gtw') && preg_match('#^/siebel/gtw/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_gtw_delete;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\GatewayController::deleteAction',)), array('_route' => 'gtw_delete'));
            }
            not_gtw_delete:

            // host
            if (rtrim($pathinfo, '/') === '/siebel/host') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'host');
                }
                return array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\HostController::indexAction',  '_route' => 'host',);
            }

            // host_show
            if (0 === strpos($pathinfo, '/siebel/host') && preg_match('#^/siebel/host/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\HostController::showAction',)), array('_route' => 'host_show'));
            }

            // host_new
            if ($pathinfo === '/siebel/host/new') {
                return array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\HostController::newAction',  '_route' => 'host_new',);
            }

            // host_create
            if ($pathinfo === '/siebel/host/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_host_create;
                }
                return array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\HostController::createAction',  '_route' => 'host_create',);
            }
            not_host_create:

            // host_edit
            if (0 === strpos($pathinfo, '/siebel/host') && preg_match('#^/siebel/host/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\HostController::editAction',)), array('_route' => 'host_edit'));
            }

            // host_update
            if (0 === strpos($pathinfo, '/siebel/host') && preg_match('#^/siebel/host/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_host_update;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\HostController::updateAction',)), array('_route' => 'host_update'));
            }
            not_host_update:

            // host_delete
            if (0 === strpos($pathinfo, '/siebel/host') && preg_match('#^/siebel/host/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_host_delete;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\HostController::deleteAction',)), array('_route' => 'host_delete'));
            }
            not_host_delete:

            // ss
            if (rtrim($pathinfo, '/') === '/siebel/ss') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ss');
                }
                return array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\SiebelServerController::indexAction',  '_route' => 'ss',);
            }

            // ss_show
            if (0 === strpos($pathinfo, '/siebel/ss') && preg_match('#^/siebel/ss/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\SiebelServerController::showAction',)), array('_route' => 'ss_show'));
            }

            // ss_new
            if ($pathinfo === '/siebel/ss/new') {
                return array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\SiebelServerController::newAction',  '_route' => 'ss_new',);
            }

            // ss_create
            if ($pathinfo === '/siebel/ss/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ss_create;
                }
                return array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\SiebelServerController::createAction',  '_route' => 'ss_create',);
            }
            not_ss_create:

            // ss_edit
            if (0 === strpos($pathinfo, '/siebel/ss') && preg_match('#^/siebel/ss/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\SiebelServerController::editAction',)), array('_route' => 'ss_edit'));
            }

            // ss_update
            if (0 === strpos($pathinfo, '/siebel/ss') && preg_match('#^/siebel/ss/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ss_update;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\SiebelServerController::updateAction',)), array('_route' => 'ss_update'));
            }
            not_ss_update:

            // ss_delete
            if (0 === strpos($pathinfo, '/siebel/ss') && preg_match('#^/siebel/ss/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ss_delete;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\SiebelServerController::deleteAction',)), array('_route' => 'ss_delete'));
            }
            not_ss_delete:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
