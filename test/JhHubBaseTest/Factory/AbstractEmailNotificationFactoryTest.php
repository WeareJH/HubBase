<?php

namespace JhHubBase\Factory;

use JhHubBase\Options\ModuleOptions;
use PHPUnit_Framework_TestCase;
use Zend\ServiceManager\ServiceManager;

/**
 * Class AbstractEmailNotificationFactoryTest
 * @package JhHubBase\Factory
 * @author  Aydin Hassan <aydin@hotmail.co.uk>
 */
class AbstractEmailNotificationFactoryTest extends PHPUnit_Framework_TestCase
{
    public function testCanCreateServiceWithName()
    {
        $sl = new ServiceManager();
        $factory = new AbstractEmailNotificationFactory;
        $this->assertTrue($factory->canCreateServiceWithName($sl, '', 'MissedBookingsEmailNotificationHandler'));
        $this->assertFalse($factory->canCreateServiceWithName($sl, '', 'SomeOtherService'));
    }

    public function testCreateServiceWithNameReturnsFalseIfClassNotExist()
    {
        $sl = new ServiceManager();
        $factory = new AbstractEmailNotificationFactory;
        $service = $factory->createServiceWithName($sl, '', 'NonExistentClass');
        $this->assertFalse($service);
    }

    public function testCreateServiceWithName()
    {
        $sl = new ServiceManager();
        $sl->setService('AcMailer\Service\MailService', $this->getMock('AcMailer\Service\MailServiceInterface'));
        $sl->setService('JhHubBase\Options\ModuleOptions', new ModuleOptions);

        $factory = new AbstractEmailNotificationFactory;
        $service = $factory->createServiceWithName($sl, '', 'JhHubBaseTest\Assets\AssetEmailNotificationHandler');
        $this->assertInstanceOf('JhHubBaseTest\Assets\AssetEmailNotificationHandler', $service);
    }
}
