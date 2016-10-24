<?php

namespace App\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class RemoveDogsFromGroupCommand extends Command
{
    protected function configure()
    {
        $this
            // the name of the command (the part after "bin/console")
            ->setName('groups:remove-dogs')

            // the short description shown while running "php bin/console list"
            ->setDescription('Remove all died users from a group.')

            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp("This command allows you to remove all dog users...")

        ;

        $this
            // configure an argument
            ->addArgument('group_id', InputArgument::REQUIRED, 'ID of the group to work with');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // outputs multiple lines to the console (adding "\n" at the end of each line)
        $output->writeln([
            'User Creator',
            '============',
            '',
        ]);

        // outputs a message followed by a "\n"
        $output->writeln('Whoa!');

        // outputs a message without adding a "\n" at the end of the line
        $output->write('You are about to ');
        $output->write('create a user.');
    }

}