<?php

namespace HocVT\Demo\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CatCommand extends Command
{
    // the name of the command (the part after "bin/console")
    protected static $defaultName = 'app:cat';

    protected function configure()
    {
        $this->setDescription('Cat command alternative')
            ->setHelp('This is a demo')
            ->addArgument('path');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $path = $input->getArgument('path');
        if(!file_exists($path)){
            $output->writeln("File not found");
        }else{
            $output->writeln(file_get_contents($path));
        }
    }
}