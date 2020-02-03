<?php


namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ChoiceQuestion;
use Symfony\Component\Console\Question\Question;

class Quest extends Command
{
    // the name of the command (the part after "bin/console")
    protected static $defaultName = 'app:quest';

    protected function configure()
    {
        $this
            ->setName('quest')
            ->setDescription('quest')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $helper = $this->getHelper('question');

        $question = new Question('Please enter your name :');
        $name = $helper->ask($input, $output, $question);
        $question = new Question('Please enter your age :');
        $age = $helper->ask($input, $output, $question);
        $question = new ChoiceQuestion('Please enter your sex :',
            ['M', 'F']);
        $sex = $helper->ask($input, $output, $question);
        $outPhrase = 'Your name is ' . $name . 'Your age is ' . $age . 'Your sex is ' . $sex;
        $output->writeln($outPhrase);
        return 0;
    }
}