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
       'machine' => true,
       'machine_show' => true,
       'machine_edit' => true,
       'machine_delete' => true,
       'machine_update' => true,
       'machine_create' => true,
       'machine_new' => true,
       'gateway' => true,
       'gateway_show' => true,
       'gateway_edit' => true,
       'gateway_delete' => true,
       'gateway_update' => true,
       'gateway_create' => true,
       'gateway_new' => true,
       'enterpriseserver' => true,
       'enterpriseserver_show' => true,
       'enterpriseserver_edit' => true,
       'enterpriseserver_delete' => true,
       'enterpriseserver_update' => true,
       'enterpriseserver_create' => true,
       'enterpriseserver_new' => true,
       'siebelserver' => true,
       'siebelserver_show' => true,
       'siebelserver_edit' => true,
       'siebelserver_delete' => true,
       'siebelserver_update' => true,
       'siebelserver_create' => true,
       'siebelserver_new' => true,
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

    private function getmachineRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\MachineController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/siebel/machine',  ),));
    }

    private function getmachine_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\MachineController::showAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/siebel/machine/show',  ),));
    }

    private function getmachine_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\MachineController::editAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/siebel/machine/edit',  ),));
    }

    private function getmachine_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\MachineController::deleteAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/siebel/machine/delete',  ),));
    }

    private function getmachine_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\MachineController::updateAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/siebel/machine/update',  ),));
    }

    private function getmachine_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\MachineController::createAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/siebel/machine/create',  ),));
    }

    private function getmachine_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\MachineController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/siebel/machine/add',  ),));
    }

    private function getgatewayRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\GatewayController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/siebel/gtw',  ),));
    }

    private function getgateway_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\GatewayController::showAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/siebel/gtw/show',  ),));
    }

    private function getgateway_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\GatewayController::editAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/siebel/gtw/edit',  ),));
    }

    private function getgateway_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\GatewayController::deleteAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/siebel/gtw/delete',  ),));
    }

    private function getgateway_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\GatewayController::updateAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/siebel/gtw/update',  ),));
    }

    private function getgateway_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\GatewayController::createAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/siebel/gtw/create',  ),));
    }

    private function getgateway_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\GatewayController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/siebel/gtw/add',  ),));
    }

    private function getenterpriseserverRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\EnterpriseServerController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/siebel/es',  ),));
    }

    private function getenterpriseserver_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\EnterpriseServerController::showAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/siebel/es/show',  ),));
    }

    private function getenterpriseserver_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\EnterpriseServerController::editAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/siebel/es/edit',  ),));
    }

    private function getenterpriseserver_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\EnterpriseServerController::deleteAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/siebel/es/delete',  ),));
    }

    private function getenterpriseserver_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\EnterpriseServerController::updateAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/siebel/es/update',  ),));
    }

    private function getenterpriseserver_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\EnterpriseServerController::createAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/siebel/es/create',  ),));
    }

    private function getenterpriseserver_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\EnterpriseServerController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/siebel/es/add',  ),));
    }

    private function getsiebelserverRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\SiebelServerController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/siebel/ss',  ),));
    }

    private function getsiebelserver_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\SiebelServerController::showAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/siebel/ss/show',  ),));
    }

    private function getsiebelserver_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\SiebelServerController::editAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/siebel/ss/edit',  ),));
    }

    private function getsiebelserver_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\SiebelServerController::deleteAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/siebel/ss/delete',  ),));
    }

    private function getsiebelserver_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\SiebelServerController::updateAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'text',    1 => '/siebel/ss/update',  ),));
    }

    private function getsiebelserver_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\SiebelServerController::createAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/siebel/ss/create',  ),));
    }

    private function getsiebelserver_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Batna\\Bundle\\ArchiSiebelBundle\\Controller\\SiebelServerController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/siebel/ss/add',  ),));
    }
}
