<?php

namespace Tests\Unit\Connectors;

use BugsBunnyMq\CorePhp\Configurators\ConnectionConfigurator;
use BugsBunnyMq\CorePhp\Connectors\BaseConnector;
use BugsBunnyMq\CorePhp\Connectors\StreamConnector;
use Tests\BaseTest;

class StreamConnectorUnitTest extends BaseTest
{
    public function testBuildWithConfiguratorInformed(): void
    {
        $connector = new StreamConnector();

        $configurator = new ConnectionConfigurator();
        $configurator->host = 'localhost';
        $configurator->user = 'admin';
        $configurator->password = 'strong';
        $configurator->port = '5672';

        $connectorActivated = $connector->build($configurator);

        $this->assertInstanceOf(BaseConnector::class, $connectorActivated);
        $this->assertInstanceOf(StreamConnector::class, $connectorActivated);
    }
}
