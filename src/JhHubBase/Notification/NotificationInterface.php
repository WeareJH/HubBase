<?php

namespace JhHubBase\Notification;

/**
 * Class NotificationInterface
 * @package JhHubBase\Notification
 * @author  Aydin Hassan <aydin@hotmail.co.uk>
 */
interface NotificationInterface
{
    /**
     * @return string
     */
    public function getName();

    /**
     * @return array
     */
    public function getParameters();
}
