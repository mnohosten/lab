<?php
if (!file_exists($autoload = __DIR__ . '/../../vendor/autoload.php')) {
    throw new RuntimeException("Missing libraries.");
}

require_once $autoload;

class A extends \Psr\Log\NullLogger
{
    
    public function notice($message, array $context = array())
    {
        echo $message;
    }

}

$service = new \PhpLab\ShowCase\Infrastructure\LoggingService(
    new \PhpLab\ShowCase\Infrastructure\PdoService(),
    new A()
);

$service->execute();
