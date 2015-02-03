<?php

namespace JhHubBase\Notification;

use ZfcUser\Entity\UserInterface;

/**
 * Interface NotificationHandlerInterface
 * @package JhHubBase\Notification
 */
interface NotificationHandlerInterface
{
    /**
     * @param NotificationInterface $notification
     *
     * @return bool
     */
    public function shouldHandle(NotificationInterface $notification);

    /**
     * @param NotificationInterface $notification
     * @param UserInterface         $user
     */
    public function handle(NotificationInterface $notification, UserInterface $user);
}
