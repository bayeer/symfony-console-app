<?php
namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;



class GreetCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('greet')
            ->setDescription('Greets you')
            ->setHelp('This command greets everyone who executes it...')
            ->addArgument('name', InputArgument::REQUIRED, 'Your name.')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $name = $input->getArgument('name');

        $output->writeln([
            'Greeting',
            '==================',
            ''
        ]);


        $output->write('Hello, dear \'');
        $output->write($name);
        $output->writeln('\'!');
    }
}