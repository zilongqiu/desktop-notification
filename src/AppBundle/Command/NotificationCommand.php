<?php

// src/AppBundle/Command/NotificationCommand.php
namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

use Joli\JoliNotif\Notification;
use Joli\JoliNotif\NotifierFactory;

class NotificationCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('demo:notification')
            ->setDescription('Send a notification to the client')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

        echo $ok;

        $output->writeln("DONE");
    }
}