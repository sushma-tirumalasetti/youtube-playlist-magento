<?php
declare (Strict_types=1);
namespace Sushma\CronExample\Cron;

use Psr\Log\LoggerInterface;

class Example{
    protected LoggerInterface $logger;
    public function __construct(LoggerInterface $logger){
        $this->logger=$logger;
    }
    public function execute(){
        $this->logger->info("starting running the crons example");
        sleep(2);
        $this->logger->info("cron example finished");
    }
}