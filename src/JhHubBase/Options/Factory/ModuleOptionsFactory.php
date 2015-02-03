<?php

namespace JhHubBase\Options\Factory;

use JhHubBase\Options\ModuleOptions;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Class ModuleOptionsFactory
 * @package JhHubBase\Options\Factory
 * @author Aydin Hassan <aydin@hotmail.co.uk>
 */
class ModuleOptionsFactory implements FactoryInterface
{
    /**
     * @param ServiceLocatorInterface $serviceLocator
     * @return ModuleOptions
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $config = $serviceLocator->get('Config');

        return new ModuleOptions(
            isset($config['hub']) ? $config['hub'] : []
        );
    }
}
