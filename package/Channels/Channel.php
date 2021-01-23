<?php

namespace BugsBunnyMq\CorePhp\Channels;

use BugsBunnyMq\CorePhp\Connectors\BaseConnector;
use PhpAmqpLib\Channel\AbstractChannel;

/**
 * Class BaseChannel
 */
class Channel
{
    private $connector;
    /**
     * @var AbstractChannel
     */
    private $channel;

    /**
     * Channel constructor.
     *
     * @param $connector
     */
    public function __construct(BaseConnector $connector){
        $this->connector = $connector;
    }

    /**
     * @param int|null $channelId
     *
     * @return AbstractChannel
     */
    public function channel(?int $channelId = null): AbstractChannel
    {
        if (is_null($this->channel)) {
            $this->channel = $this->connector->connection()->channel($channelId);
        }

        return $this->channel;
    }
}
