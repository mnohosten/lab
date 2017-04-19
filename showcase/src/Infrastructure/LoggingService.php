<?php
namespace PhpLab\ShowCase\Infrastructure;

use PhpLab\ShowCase\Service;
use Psr\Log\LoggerInterface;

class LoggingService implements Service
{

    /** @var Service */
    private $service;
    /** @var LoggerInterface */
    private $logger;

    /**
     * LoggingService constructor.
     * @param Service $service
     * @param LoggerInterface $logger
     */
    public function __construct(Service $service, LoggerInterface $logger)
    {
        $this->service = $service;
        $this->logger = $logger;
    }

    public function execute()
    {
        try {
            $this->service->execute();
        } catch (\Exception $exception) {
            $this->logger->notice('Service start' . PHP_EOL);

            $this->logger->notice('Service end' . PHP_EOL);
        }

    }

}
