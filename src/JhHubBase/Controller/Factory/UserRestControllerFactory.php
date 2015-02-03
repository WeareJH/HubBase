<?php

namespace JhHubBase\Controller\Factory;

use JhHubBase\Controller\UserRestController;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Class UserRestControllerFactory
 * @package JhHubBase\Controller\Factory
 * @author Aydin Hassan <aydin@hotmail.co.uk>
 */
class UserRestControllerFactory implements FactoryInterface
{
    /**
     * @param ServiceLocatorInterface $serviceLocator
     * @return BookingRestController
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        //get parent locator
        $serviceLocator = $serviceLocator->getServiceLocator();

        return new UserRestController(
            $serviceLocator->get('JhUser\Repository\UserRepository')
        );
    }
}
