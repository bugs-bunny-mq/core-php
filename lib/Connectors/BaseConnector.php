<?php

namespace BugsBunnyMq\CorePhp\Connectors;

use Exception;
use PhpAmqpLib\Connection\AbstractConnection;

/**
 * Class BaseConnector
 */
abstract class BaseConnector
{
    /**
     * Property to keep the connection variable.
     *
     * @var AbstractConnection
     */
    private $connection;

    /**
     * @param AbstractConnection $connection
     *
     * @return void
     */
    public function setConnection(AbstractConnection $connection): void
    {
        $this->connection = $connection;
    }

    /**
     * @throws Exception
     */
    public function __destruct()
    {
        if (is_null($this->connection)) {
            return;
        }

        $this->connection->close();
    }
}
