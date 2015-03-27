<?php
namespace ZobleFormEntity;

use Zend\ModuleManager\ModuleManagerInterface;
use Zend\EventManager\EventInterface;
use Zend\Loader\StandardAutoloader;

class Module
{
    /**
     * @var \Zend\ServiceManager\ServiceLocatorInterface
     */
    private $serviceManager;

    /**
     * {@inheritDoc}
     */
    public function init(ModuleManagerInterface $moduleManager)
    {
        AnnotationRegistry::registerLoader(
            function ($className) {
                return class_exists($className);
            }
        );
    }

    /**
     * {@inheritDoc}
     */
    public function onBootstrap(EventInterface $event)
    {
        $this->serviceManager = $event->getTarget()->getServiceManager();
    }

    /**
     * {@inheritDoc}
     */
    public function getConfig()
    {
        return include __DIR__ . '/../../config/module.config.php';
    }

}
