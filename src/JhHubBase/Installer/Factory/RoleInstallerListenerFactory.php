<?php

namespace JhHubBase\Installer\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

use JhHubBase\Installer\RoleInstallerListener;

/**
 * Class RoleInstallerListenerFactory
 * @package JhHubBase\Installer\Factory
 * @author Aydin Hassan <aydin@hotmail.co.uk>
 */
class RoleInstallerListenerFactory implements FactoryInterface
{
    /**
     * @param ServiceLocatorInterface $serviceLocator
     * @return BookingSaveListener
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        return new RoleInstallerListener(
            $serviceLocator->get('Console')
        );
    }
}
