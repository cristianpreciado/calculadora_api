<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use App\Service\Calculate;

class OperationCommand extends Command
{
    protected static $defaultName = 'operations';

    protected function configure()
    {
        $this
            ->setDescription('Este comando sirve para la ejecucion de operaciones matemáticas básicas')
            ->addArgument('operatorA', InputArgument::REQUIRED, 'Primer operado')
            ->addArgument('operatorB', InputArgument::REQUIRED, 'segundo operador')
            ->addArgument('operation', InputArgument::REQUIRED, 'Operación a realizar')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);
        $operatorA = $input->getArgument('operatorA');
        $operatorB = $input->getArgument('operatorB');
        $operation = $input->getArgument('operation');

        $calculate = new Calculate($operation);
        $result = $calculate->calculate($operatorA,$operatorB);
        if (is_numeric($result)) {
            $io->success('{"result":' . $result . '}');
            return Command::SUCCESS;
        } else {
            $io->error($result);
            return Command::FAILURE;
        }
    }
}