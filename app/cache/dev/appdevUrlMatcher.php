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
            // machine
            if ($pathinfo === '/siebel/machine') {
                return array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\MachineController::indexAction',  '_route' => 'machine',);
            }

            // machine_show
            if (0 === strpos($pathinfo, '/siebel/machine/show') && preg_match('#^/siebel/machine/show/(?P<id>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\MachineController::showAction',)), array('_route' => 'machine_show'));
            }

            // machine_edit
            if (0 === strpos($pathinfo, '/siebel/machine/edit') && preg_match('#^/siebel/machine/edit/(?P<id>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\MachineController::editAction',)), array('_route' => 'machine_edit'));
            }

            // machine_delete
            if (0 === strpos($pathinfo, '/siebel/machine/delete') && preg_match('#^/siebel/machine/delete/(?P<id>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\MachineController::deleteAction',)), array('_route' => 'machine_delete'));
            }

            // machine_update
            if (0 === strpos($pathinfo, '/siebel/machine/update') && preg_match('#^/siebel/machine/update/(?P<id>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\MachineController::updateAction',)), array('_route' => 'machine_update'));
            }

            // machine_create
            if ($pathinfo === '/siebel/machine/create') {
                return array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\MachineController::createAction',  '_route' => 'machine_create',);
            }

            // machine_new
            if ($pathinfo === '/siebel/machine/add') {
                return array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\MachineController::newAction',  '_route' => 'machine_new',);
            }

            // gateway
            if ($pathinfo === '/siebel/gtw') {
                return array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\GatewayController::indexAction',  '_route' => 'gateway',);
            }

            // gateway_show
            if (0 === strpos($pathinfo, '/siebel/gtw/show') && preg_match('#^/siebel/gtw/show/(?P<id>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\GatewayController::showAction',)), array('_route' => 'gateway_show'));
            }

            // gateway_edit
            if (0 === strpos($pathinfo, '/siebel/gtw/edit') && preg_match('#^/siebel/gtw/edit/(?P<id>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\GatewayController::editAction',)), array('_route' => 'gateway_edit'));
            }

            // gateway_delete
            if (0 === strpos($pathinfo, '/siebel/gtw/delete') && preg_match('#^/siebel/gtw/delete/(?P<id>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\GatewayController::deleteAction',)), array('_route' => 'gateway_delete'));
            }

            // gateway_update
            if (0 === strpos($pathinfo, '/siebel/gtw/update') && preg_match('#^/siebel/gtw/update/(?P<id>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\GatewayController::updateAction',)), array('_route' => 'gateway_update'));
            }

            // gateway_create
            if ($pathinfo === '/siebel/gtw/create') {
                return array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\GatewayController::createAction',  '_route' => 'gateway_create',);
            }

            // gateway_new
            if ($pathinfo === '/siebel/gtw/add') {
                return array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\GatewayController::newAction',  '_route' => 'gateway_new',);
            }

            // enterpriseserver
            if ($pathinfo === '/siebel/es') {
                return array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\EnterpriseServerController::indexAction',  '_route' => 'enterpriseserver',);
            }

            // enterpriseserver_show
            if (0 === strpos($pathinfo, '/siebel/es/show') && preg_match('#^/siebel/es/show/(?P<id>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\EnterpriseServerController::showAction',)), array('_route' => 'enterpriseserver_show'));
            }

            // enterpriseserver_edit
            if (0 === strpos($pathinfo, '/siebel/es/edit') && preg_match('#^/siebel/es/edit/(?P<id>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\EnterpriseServerController::editAction',)), array('_route' => 'enterpriseserver_edit'));
            }

            // enterpriseserver_delete
            if (0 === strpos($pathinfo, '/siebel/es/delete') && preg_match('#^/siebel/es/delete/(?P<id>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\EnterpriseServerController::deleteAction',)), array('_route' => 'enterpriseserver_delete'));
            }

            // enterpriseserver_update
            if (0 === strpos($pathinfo, '/siebel/es/update') && preg_match('#^/siebel/es/update/(?P<id>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\EnterpriseServerController::updateAction',)), array('_route' => 'enterpriseserver_update'));
            }

            // enterpriseserver_create
            if ($pathinfo === '/siebel/es/create') {
                return array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\EnterpriseServerController::createAction',  '_route' => 'enterpriseserver_create',);
            }

            // enterpriseserver_new
            if ($pathinfo === '/siebel/es/add') {
                return array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\EnterpriseServerController::newAction',  '_route' => 'enterpriseserver_new',);
            }

            // siebelserver
            if ($pathinfo === '/siebel/ss') {
                return array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\SiebelServerController::indexAction',  '_route' => 'siebelserver',);
            }

            // siebelserver_show
            if (0 === strpos($pathinfo, '/siebel/ss/show') && preg_match('#^/siebel/ss/show/(?P<id>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\SiebelServerController::showAction',)), array('_route' => 'siebelserver_show'));
            }

            // siebelserver_edit
            if (0 === strpos($pathinfo, '/siebel/ss/edit') && preg_match('#^/siebel/ss/edit/(?P<id>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\SiebelServerController::editAction',)), array('_route' => 'siebelserver_edit'));
            }

            // siebelserver_delete
            if (0 === strpos($pathinfo, '/siebel/ss/delete') && preg_match('#^/siebel/ss/delete/(?P<id>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\SiebelServerController::deleteAction',)), array('_route' => 'siebelserver_delete'));
            }

            // siebelserver_update
            if (0 === strpos($pathinfo, '/siebel/ss/update') && preg_match('#^/siebel/ss/update/(?P<id>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\SiebelServerController::updateAction',)), array('_route' => 'siebelserver_update'));
            }

            // siebelserver_create
            if ($pathinfo === '/siebel/ss/create') {
                return array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\SiebelServerController::createAction',  '_route' => 'siebelserver_create',);
            }

            // siebelserver_new
            if ($pathinfo === '/siebel/ss/add') {
                return array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\SiebelServerController::newAction',  '_route' => 'siebelserver_new',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
