<?php

namespace BugsBunnyMq\CorePhp\Connectors;

use PhpAmqpLib\Connection\AbstractConnection;

/**
 * Class BaseConnector
 * @package BugsBunnyMq\CorePhp\Connectors
 */
abstract class BaseConnector
{
    /**
     * @var AbstractConnection
     */
    private $connection;

    /**
     * @param AbstractConnection $connection
     * @return void
     */
    public function setConnection(AbstractConnection $connection): void
    {
        $this->connection = $connection;
    }
}
