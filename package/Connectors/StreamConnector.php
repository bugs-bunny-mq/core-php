<?php

namespace BugsBunnyMq\CorePhp\Connectors;

use BugsBunnyMq\CorePhp\Configurators\ConnectionConfigurator;
use PhpAmqpLib\Connection\AMQPStreamConnection;

/**
 * Class StreamConnector
 *
 * @package BugsBunnyMq\CorePhp\Connectors
 */
class StreamConnector extends BaseConnector
{
    /**
     * Property of configurator class of connection.
     *
     * @var ConnectionConfigurator
     */
    private $configurator;

    /**
     * @param ConnectionConfigurator $configurator
     */
    public function __construct(ConnectionConfigurator $configurator)
    {
        $this->configurator = $configurator;

        $connection = new AMQPStreamConnection(
            $this->configurator->host,
            $this->configurator->port,
            $this->configurator->user,
            $this->configurator->password
        );

        parent::setConnection($connection);
    }
}
