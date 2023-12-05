<?php

declare(strict_types=1);

namespace Sushma\MuteObserverExample\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Sushma\MuteObserverExample\Model\DeliveryTypes;
use Sushma\MuteObserverExample\Observer\DeliveryTypesObserver;

class CoreDeliveryCommand extends Command
{
    /**
     * @var DeliveryTypes
     */
    protected DeliveryTypes $deliveryTypes;

    /**
     * DeliveryCommand constructor.
     *
     * @param DeliveryTypes $deliveryTypes
     */
    public function __construct(DeliveryTypes $deliveryTypes)
    {
        parent::__construct(null);
        $this->deliveryTypes = $deliveryTypes;
    }

    protected function configure()
    {
        parent::configure();
        $this->setName('delivery:types:core');
        $this->setDescription('List Delivery Types');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        DeliveryTypesObserver::$muted = true;
        $types = $this->deliveryTypes->toDataObject();
        $output->writeln($types->getData('types'));
        DeliveryTypesObserver::$muted = false;
    }
}
