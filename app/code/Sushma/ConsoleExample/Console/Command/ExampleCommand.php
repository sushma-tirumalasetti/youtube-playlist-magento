<?php
declare (strict_types= 1);

namespace Sushma\ConsoleExample\Console\Command;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
class ExampleCommand extends Command{
    protected function configure(){
        parent::configure();
        $this->setName("Sushma:example:run");
        $this->setDescription("Sushma Console Example");
        // $this->addArgument("product_id",InputArgument::REQUIRED,"Product_id");
        // $this->addArgument('product_id', InputArgument::REQUIRED|InputArgument::IS_ARRAY, 'Product Id');

        // $this->addArgument("product_id",InputArgument::OPTIONAL,"Product_id");
        // $this->addArgument('product_id', InputArgument::OPTIONAL|InputArgument::IS_ARRAY, 'Product Id');
        // $this->addOption('required_name',null, InputOption::VALUE_REQUIRED,'Required_Name');
        // $this->addOption('optional_name',null, InputOption::VALUE_OPTIONAL,'optional_Name');
        $this->addOption('force',null,InputOption::VALUE_NONE,'force');


    }
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // $output->write("Hello World");
        // $output->write("Welcome back");

        // $output->writeln("Hello World");
        // $output->writeln("Welcome back");

        // $output->writeln("<info>Hello World</info>");
        // $output->writeln("<comment>Welcome back</comment>");

        // $output->writeln("<error>Hello World</error>");
        // $output->writeln("<question>Welcome back</question>");

        // $productId= $input->getArgument("product_id");
        // $output->writeln($productId);
        
        // $requiredName = $input->getOption('optional_name');
        // $output->writeln($requiredName);

        // var_dump($input->getOption('force'));
        // $output->writeln((bool)$input->getOption('force'));


        if ($input->getOption('force')) {
            $output->writeln('Running by force');
        } else {
            $output->writeln('danger, you must know what are you doing');
        }
    }

     
}