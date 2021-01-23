<?php

namespace Tests\Unit\Connectors;

use BugsBunnyMq\CorePhp\Connectors\BaseConnector;
use PhpAmqpLib\Connection\AbstractConnection;
use PhpAmqpLib\Connection\AMQPStreamConnection;
use Tests\BaseTest;

/**
 * Class BaseConnectorUnitTest
 * @package Tests\Unit\Connectors
 */
class BaseConnectorUnitTest extends BaseTest
{
    /**
     * @var BaseConnector
     */
    private $baseClass;

    /**
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();

        $this->baseClass = new class extends BaseConnector {
        };
    }

    /**
     * @return void
     */
    public function testSetConnection(): void
    {
        $connection = new AMQPStreamConnection(
            'localhost',
            '5672',
            'admin',
            'strong'
        );

        $response = $this->baseClass->setConnection($connection);
        $this->assertNull($response);
        $this->assertNotNull($this->baseClass->connection());
    }

    /**
     * @return void
     */
    public function testConnection(): void
    {
        $connection = new AMQPStreamConnection(
            'localhost',
            '5672',
            'admin',
            'strong'
        );
        $this->baseClass->setConnection($connection);

        $response = $this->baseClass->connection();
        $this->assertInstanceOf(AbstractConnection::class, $response);
    }
}
