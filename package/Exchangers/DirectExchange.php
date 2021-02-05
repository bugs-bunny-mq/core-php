<?php

namespace BugsBunnyMq\CorePhp\Exchangers;

use BugsBunnyMq\CorePhp\Channels\Channel;
use BugsBunnyMq\CorePhp\Configurators\ExchangeConfigurator;
use BugsBunnyMq\CorePhp\Enumerators\ExchangeTypeEnum;

/**
 * Class DirectExchange
 *
 * @package BugsBunnyMq\CorePhp\Exchange
 */
class DirectExchange extends BaseExchange
{
    /**
     * @var string
     */
    private $type = ExchangeTypeEnum::DIRECT;

    /**
     * DirectExchange constructor.
     *
     * @param ExchangeConfigurator $configurator
     * @param Channel $channel
     */
    public function __construct(ExchangeConfigurator $configurator, Channel $channel)
    {
        parent::__construct($configurator, $channel);
    }
}
