<?php

namespace JhHubBaseTest\Assets;

use AcMailer\Service\MailServiceInterface;
use JhHubBase\Options\ModuleOptions;

/**
 * Class AssetEmailNotificationHandler
 * @package JhHubBaseTest\Assets
 * @author  Aydin Hassan <aydin@hotmail.co.uk>
 */
class AssetEmailNotificationHandler
{
    /**
     * @param MailServiceInterface  $service
     * @param ModuleOptions         $options
     */
    public function __construct(MailServiceInterface $service, ModuleOptions $options)
    {
    }
}
