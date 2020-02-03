<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class StringRepeater extends Command
{
    // the name of the command (the part after "bin/console")
    protected static $defaultName = 'app:repeat-srting';

    protected function configure()
    {
        $this
            ->setName('string_repeater')
            ->setDescription('change string form.')
            ->addArgument('string', InputArgument::REQUIRED, 'String you want to repeat.')
            ->addArgument('times', InputArgument::OPTIONAL, '2 is default.')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $text = $input->getArgument('string');
        $times = $input->getArgument('times');

        if($times) {
            for ($i=0; $i < $times  ; $i++) {
                $output->writeln($text);
            }
        } else {
            for ($i=0; $i < 2  ; $i++) {
                $output->writeln($text);
            }
        }

        return 0;
    }
}