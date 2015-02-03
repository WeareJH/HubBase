<?php

namespace JhHubBase\Controller\Factory;

use JhHubBase\Controller\InstallController;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Class InstallControllerFactory
 * @package JhHubBase\Controller\Factory
 * @author Aydin Hassan <aydin@hotmail.co.uk>
 */
class InstallControllerFactory implements FactoryInterface
{
    /**
     * @param ServiceLocatorInterface $serviceLocator
     * @return InstallController
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        //get parent locator
        $serviceLocator = $serviceLocator->getServiceLocator();

        return new InstallController(
            $serviceLocator->get('JhHubBase\Install\Installer'),
            $serviceLocator->get('Console')
        );
    }
}
