<?php

namespace JhHubBaseTest\Options\Factory;

use JhHubBase\Options\ModuleOptions;
use PHPUnit_Framework_TestCase;

/**
 * Class ModuleOptionsTest
 * @package JhHubBaseTest\Options\Factory
 * @author  Aydin Hassan <aydin@hotmail.co.uk>
 */
class ModuleOptionsTest extends PHPUnit_Framework_TestCase
{
    public function testSettersGetters()
    {
        $options = new ModuleOptions;
        $this->assertNull($options->getAppUrl());
        $options->setAppUrl('www.flex.wearejh.com');
        $this->assertEquals('www.flex.wearejh.com', $options->getAppUrl());
    }
}
