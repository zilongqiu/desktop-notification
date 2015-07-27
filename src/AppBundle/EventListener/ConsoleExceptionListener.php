<?php
// src/AppBundle/EventListener/ConsoleExceptionListener.php
namespace AppBundle\EventListener;

use Symfony\Component\Console\Event\ConsoleExceptionEvent;
use Psr\Log\LoggerInterface;

use Joli\JoliNotif\Notification;
use Joli\JoliNotif\NotifierFactory;
use Symfony\Component\HttpKernel\Kernel;

/**
 * Class ConsoleExceptionListener
 *
 * @package AppBundle\EventListener
 */
class ConsoleExceptionListener
{
    public function onConsoleException(ConsoleExceptionEvent $event)
    {
        $command = $event->getCommand();
        $exception = $event->getException();

        $message = sprintf(
            '%s',
            $command->getName()
        );

        // Create a Notifier (or null if no notifier supported)
        $notifier = NotifierFactory::create();

        if ($notifier) {
            // Create your notification
            $notification =
                (new Notification())
                    ->setTitle('Command fail')
                    ->setBody($message)
            ;

            // Send it
            $notifier->send($notification);
        }

    }
}