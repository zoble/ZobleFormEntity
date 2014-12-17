<?php

/**
 * @author Reginaldo Azevedo Junior <rjuniorbrasilia@gmail.com>
 *
 */

namespace FormEntityTest;

use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;
use Zend\Session\SessionManager;
use Zend\Session\Container;

class Module {

    public function onBootstrap(MvcEvent $e) {
        $eventManager = $e->getApplication()->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);

        $eventManager->getSharedManager()
                ->attach('Zend\Mvc\Controller\AbstractActionController', 'dispatch', function($e) {
                    $controller = $e->getTarget();
                    $routeName = $e->getRouteMatch()->getMatchedRouteName();

                    $config = $e->getApplication()->getServiceManager()
                            ->get('config');
                    if (isset($config['route_layouts'][$routeName])) {
                        $controller->layout($config['route_layouts'][$routeName]);
                    }
                }, 1);

        $this->setLayoutError($eventManager);
    }

    public function setLayoutError($eventManager) {
        $eventManager->attach(MvcEvent::EVENT_DISPATCH_ERROR, function(MvcEvent $event) {
            $viewModel = $event->getViewModel();
            $viewModel->setTemplate('layout/error');
        }, -200);
    }

    public function getConfig() {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig() {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    public function getServiceConfig() {
        return array(
            'factories' => array(

            ),
        );
    }
}
