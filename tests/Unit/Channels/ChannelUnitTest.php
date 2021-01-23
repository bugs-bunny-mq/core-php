<?php

namespace Tests\Unit\Channels;

use BugsBunnyMq\CorePhp\Channels\Channel;
use BugsBunnyMq\CorePhp\Configurators\ConnectionConfigurator;
use BugsBunnyMq\CorePhp\Connectors\StreamConnector;
use PhpAmqpLib\Channel\AbstractChannel;
use Tests\BaseTest;

/**
 * Class ChannelUnitTest
 * @package Tests\Unit\Channels
 */
class ChannelUnitTest extends BaseTest
{
    /**
     * @var StreamConnector
     */
    private $connector;

    /**
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();

        $configurator = new ConnectionConfigurator();
        $configurator->host = 'localhost';
        $configurator->user = 'admin';
        $configurator->password = 'strong';
        $configurator->port = '5672';

        $this->connector = new StreamConnector($configurator);
    }

    /**
     * @return void
     */
    public function testChannelEmptySingleton(): void
    {
        $channel = new Channel($this->connector);
        $response = $channel->channel();

        $this->assertInstanceOf(AbstractChannel::class, $response);
    }

    /**
     * @return void
     */
    public function testChannelNotEmptySingleton(): void
    {
        $channel = new Channel($this->connector);
        $response = $channel->channel();

        $response2 = $channel->channel();
        $this->assertInstanceOf(AbstractChannel::class, $response2);
        $this->assertEquals($response->getChannelId(), $response2->getChannelId());
    }
}
