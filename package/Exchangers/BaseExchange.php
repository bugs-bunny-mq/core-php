<?php

namespace BugsBunnyMq\CorePhp\Exchangers;

use BugsBunnyMq\CorePhp\Channels\Channel;
use BugsBunnyMq\CorePhp\Configurators\ExchangeConfigurator;

/**
 * Class BaseExchange
 *
 * @package BugsBunnyMq\CorePhp\Exchange
 */
abstract class BaseExchange
{
    /**
     * @var ExchangeConfigurator
     */
    private $configurator;
    /**
     * @var Channel
     */
    private $channel;
    /**
     * @var mixed|null
     */
    private $exchange;

    /**
     * BaseExchange constructor.
     *
     * @param ExchangeConfigurator $configurator
     * @param Channel $channel
     */
    public function __construct(ExchangeConfigurator $configurator, Channel $channel)
    {
        $this->configurator = $configurator;
        $this->channel = $channel;
    }
}
