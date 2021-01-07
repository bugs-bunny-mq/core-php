<?php

namespace BugsBunnyMq\CorePhp\Connectors;

use BugsBunnyMq\CorePhp\Configurators\ConnectionConfigurator;
use PhpAmqpLib\Connection\AMQPStreamConnection;

/**
 * Class StreamConnector
 * @package BugsBunnyMq\CorePhp\Connectors
 */
class StreamConnector extends BaseConnector
{
    /**
     * @var ConnectionConfigurator
     */
    private $configurator;

    /**
     * @param ConnectionConfigurator|null $configurator
     *
     * @return $this|BaseConnector
     */
    public function build(?ConnectionConfigurator $configurator): BaseConnector
    {
        if (isset($configurator)) {
            $this->configurator = $configurator;
        } elseif (is_null($this->configurator)) {
            true;
//            throw new \Exception();
        }

        $connection = new AMQPStreamConnection(
            $this->configurator->host,
            $this->configurator->port,
            $this->configurator->user,
            $this->configurator->password
        );

        parent::setConnection($connection);

        return $this;
    }
}
