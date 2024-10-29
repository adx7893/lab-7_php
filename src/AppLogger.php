<?php

namespace App;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class LoggerSetup
{
    private $logger;

    public function __construct($channelName)
    {
        $this->logger = new Logger($channelName);
        $this->logger->pushHandler(new StreamHandler(__DIR__ . '/../logs/app.log', Logger::DEBUG));
    }

    public function logInfo($message)
    {
        $this->logger->info($message);
    }

    public function logError($message)
    {
        $this->logger->error($message);
    }

    public function logDebug($message)
    {
        $this->logger->debug($message);
    }
}
