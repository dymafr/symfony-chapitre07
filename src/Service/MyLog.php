<?php

namespace App\Service;

use Symfony\Component\Filesystem\Filesystem;

class MyLog
{
    function __construct(private Filesystem $fs, private string $logFile, private $logger)
    {
    }

    public function writeLog(string $message)
    {
        $this->logger->info('Test');
        $this->fs->appendToFile($this->logFile, $message . PHP_EOL);
    }
}
