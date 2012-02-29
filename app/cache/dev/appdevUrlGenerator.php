<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appdevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       '_wdt' => true,
       '_profiler_search' => true,
       '_profiler_purge' => true,
       '_profiler_import' => true,
       '_profiler_export' => true,
       '_profiler_search_results' => true,
       '_profiler' => true,
       '_configurator_home' => true,
       '_configurator_step' => true,
       '_configurator_final' => true,
       'bdd' => true,
       'bdd_show' => true,
       'bdd_new' => true,
       'bdd_create' => true,
       'bdd_edit' => true,
       'bdd_update' => true,
       'bdd_delete' => true,
       'contexte' => true,
       'contexte_show' => true,
       'contexte_new' => true,
       'contexte_create' => true,
       'contexte_edit' => true,
       'contexte_update' => true,
       'contexte_delete' => true,
       'es' => true,
       'es_show' => true,
       'es_new' => true,
       'es_create' => true,
       'es_edit' => true,
       'es_update' => true,
       'es_delete' => true,
       'env' => true,
       'env_show' => true,
       'env_new' => true,
       'env_create' => true,
       'env_edit' => true,
       'env_update' => true,
       'env_delete' => true,
       'gtw' => true,
       'gtw_show' => true,
       'gtw_new' => true,
       'gtw_create' => true,
       'gtw_edit' => true,
       'gtw_update' => true,
       'gtw_delete' => true,
       'host' => true,
       'host_show' => true,
       'host_new' => true,
       'host_create' => true,
       'host_edit' => true,
       'host_update' => true,
       'host_delete' => true,
       'ss' => true,
       'ss_show' => true,
       'ss_new' => true,
       'ss_create' => true,
       'ss_edit' => true,
       'ss_update' => true,
       'ss_delete' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function get_wdtRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_wdt',  ),));
    }

    private function get_profiler_searchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/search',  ),));
    }

    private function get_profiler_purgeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/purge',  ),));
    }

    private function get_profiler_importRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/import',  ),));
    }

    private function get_profiler_exportRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '.txt',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/\\.]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler/export',  ),));
    }

    private function get_profiler_search_resultsRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/search/results',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_profilerRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_configurator_homeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/',  ),));
    }

    private function get_configurator_stepRouteInfo()
    {
        return array(array (  0 => 'index',), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'index',  ),  1 =>   array (    0 => 'text',    1 => '/_configurator/step',  ),));
    }

    private function get_configurator_finalRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/final',  ),));
    }

    private function getbddRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\BddController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/siebel/bdd',  ),));
    }

    private function getbdd_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\BddController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/siebel/bdd',  ),));
    }

    private function getbdd_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\BddController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/siebel/bdd/new',  ),));
    }

    private function getbdd_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\BddController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/siebel/bdd/create',  ),));
    }

    private function getbdd_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\BddController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/siebel/bdd',  ),));
    }

    private function getbdd_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\BddController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/siebel/bdd',  ),));
    }

    private function getbdd_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\BddController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/siebel/bdd',  ),));
    }

    private function getcontexteRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\ContexteController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/siebel/contxt/',  ),));
    }

    private function getcontexte_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\ContexteController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/siebel/contxt',  ),));
    }

    private function getcontexte_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\ContexteController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/siebel/contxt/new',  ),));
    }

    private function getcontexte_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\ContexteController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/siebel/contxt/create',  ),));
    }

    private function getcontexte_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\ContexteController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/siebel/contxt',  ),));
    }

    private function getcontexte_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\ContexteController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/siebel/contxt',  ),));
    }

    private function getcontexte_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\ContexteController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/siebel/contxt',  ),));
    }

    private function getesRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\EnterpriseServerController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/siebel/es/',  ),));
    }

    private function getes_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\EnterpriseServerController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/siebel/es',  ),));
    }

    private function getes_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\EnterpriseServerController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/siebel/es/new',  ),));
    }

    private function getes_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\EnterpriseServerController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/siebel/es/create',  ),));
    }

    private function getes_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\EnterpriseServerController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/siebel/es',  ),));
    }

    private function getes_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\EnterpriseServerController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/siebel/es',  ),));
    }

    private function getes_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\EnterpriseServerController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/siebel/es',  ),));
    }

    private function getenvRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\EnvironnementController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/siebel/env/',  ),));
    }

    private function getenv_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\EnvironnementController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/siebel/env',  ),));
    }

    private function getenv_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\EnvironnementController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/siebel/env/new',  ),));
    }

    private function getenv_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\EnvironnementController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/siebel/env/create',  ),));
    }

    private function getenv_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\EnvironnementController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/siebel/env',  ),));
    }

    private function getenv_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\EnvironnementController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/siebel/env',  ),));
    }

    private function getenv_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\EnvironnementController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/siebel/env',  ),));
    }

    private function getgtwRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\GatewayController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/siebel/gtw/',  ),));
    }

    private function getgtw_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\GatewayController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/siebel/gtw',  ),));
    }

    private function getgtw_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\GatewayController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/siebel/gtw/new',  ),));
    }

    private function getgtw_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\GatewayController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/siebel/gtw/create',  ),));
    }

    private function getgtw_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\GatewayController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/siebel/gtw',  ),));
    }

    private function getgtw_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\GatewayController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/siebel/gtw',  ),));
    }

    private function getgtw_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\GatewayController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/siebel/gtw',  ),));
    }

    private function gethostRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\HostController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/siebel/host/',  ),));
    }

    private function gethost_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\HostController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/siebel/host',  ),));
    }

    private function gethost_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\HostController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/siebel/host/new',  ),));
    }

    private function gethost_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\HostController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/siebel/host/create',  ),));
    }

    private function gethost_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\HostController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/siebel/host',  ),));
    }

    private function gethost_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\HostController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/siebel/host',  ),));
    }

    private function gethost_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\HostController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/siebel/host',  ),));
    }

    private function getssRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\SiebelServerController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/siebel/ss/',  ),));
    }

    private function getss_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\SiebelServerController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/siebel/ss',  ),));
    }

    private function getss_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\SiebelServerController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/siebel/ss/new',  ),));
    }

    private function getss_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\SiebelServerController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/siebel/ss/create',  ),));
    }

    private function getss_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\SiebelServerController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/siebel/ss',  ),));
    }

    private function getss_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\SiebelServerController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/siebel/ss',  ),));
    }

    private function getss_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\SiebelServerController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/siebel/ss',  ),));
    }
}
