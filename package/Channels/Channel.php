<?php

namespace BugsBunnyMq\CorePhp\Channels;

use BugsBunnyMq\CorePhp\Connectors\BaseConnector;
use PhpAmqpLib\Channel\AMQPChannel;

/**
 * Class Channel
 */
class Channel
{
    private $connector;
    /**
     * @var AMQPChannel
     */
    private $channel;

    /**
     * Channel constructor.
     *
     * @param $connector
     */
    public function __construct(BaseConnector $connector)
    {
        $this->connector = $connector;
    }

    /**
     * @param int|null $channelId
     *
     * @return AMQPChannel
     */
    public function channel(?int $channelId = null): AMQPChannel
    {
        if (is_null($this->channel)) {
            $this->channel = $this->connector->connection()->channel($channelId);
        }

        return $this->channel;
    }
}
