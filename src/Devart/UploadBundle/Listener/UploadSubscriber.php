<?php

namespace Devart\UploadBundle\Listener;

use Doctrine\Common\EventArgs;
use Doctrine\Common\EventSubscriber;

class UploadSubscriber implements EventSubscriber
{
    /**
     * Returns an array of events this suscriber wants to listen to.
     *
     * @return array
     */
    public function getSubscribedEvents()
    {
        return [
            'prePersist'
        ];
    }
    public function prePersist(EventArgs $event)
    {
        dump($event);
        throw new \Exception('Au secour');
    }
}