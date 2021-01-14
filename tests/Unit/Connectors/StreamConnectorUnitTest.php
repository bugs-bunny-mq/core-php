<?php

namespace Tests\Unit\Connectors;

use BugsBunnyMq\CorePhp\Configurators\ConnectionConfigurator;
use BugsBunnyMq\CorePhp\Connectors\BaseConnector;
use BugsBunnyMq\CorePhp\Connectors\StreamConnector;
use Tests\BaseTest;

/**
 * Class StreamConnectorUnitTest
 * @package Tests\Unit\Connectors
 */
class StreamConnectorUnitTest extends BaseTest
{
    /**
     * @return void
     */
    public function testBuildWithConfiguratorInformed(): void
    {
        $configurator = new ConnectionConfigurator();
        $configurator->host = 'localhost';
        $configurator->user = 'admin';
        $configurator->password = 'strong';
        $configurator->port = '5672';

        $connector = new StreamConnector($configurator);

        $this->assertInstanceOf(BaseConnector::class, $connector);
        $this->assertInstanceOf(StreamConnector::class, $connector);
    }
}
