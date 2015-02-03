<?php

namespace JhHubBase\Listener\Factory;

use JhHubBase\Listener\SpiffyNavigationZfcRbacListener;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Class SpiffyNavigationRbacListenerFactory
 * @package JhHubBase\Service\Factory
 * @author Aydin Hassan <aydin@hotmail.co.uk>
 */
class SpiffyNavigationZfcRbacListenerFactory implements FactoryInterface
{
    /**
     * @param ServiceLocatorInterface $serviceLocator
     * @return InstallController
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        /** @var \ZfcRbac\Service\AuthorizationServiceInterface $authService */
        $authService = $serviceLocator->get('ZfcRbac\Service\AuthorizationService');
        return new SpiffyNavigationZfcRbacListener($authService);
    }
}
