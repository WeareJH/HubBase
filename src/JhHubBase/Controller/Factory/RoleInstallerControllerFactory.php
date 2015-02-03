<?php

namespace JhHubBase\Controller\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

use JhHubBase\Controller\RoleInstallerController;

/**
 * Class RoleInstallerControllerFactory
 * @package JhHubBase\Controller\Factory
 * @author Aydin Hassan <aydin@hotmail.co.uk>
 */
class RoleInstallerControllerFactory implements FactoryInterface
{
    /**
     * @param ServiceLocatorInterface $serviceLocator
     * @return InstallController
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        //get parent locator
        $serviceLocator = $serviceLocator->getServiceLocator();

        return new RoleInstallerController(
            $serviceLocator->get('Console'),
            $serviceLocator->get('JhHubBase\Installer\RoleInstaller')
        );
    }
}
