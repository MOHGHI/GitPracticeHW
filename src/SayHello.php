<?php

namespace App;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class SayHello extends Command
{
    // the name of the command (the part after "bin/console")
    protected static $defaultName = 'app:sayHello';

    protected function configure()
    {
        $this
            ->setName('say_hello')
            ->setDescription('say hello')
            ->addArgument('string', InputArgument::REQUIRED, 'Parameter you want to say hello to.')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $text = $input->getArgument('string');
        $text = 'Привет ' .$text;
        $output->writeln($text);
        return 0;
    }
}