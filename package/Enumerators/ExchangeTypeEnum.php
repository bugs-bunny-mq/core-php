<?php

namespace BugsBunnyMq\CorePhp\Enumerators;

/**
 * Class ExchangeTypeEnum
 * @package BugsBunnyMq\CorePhp\Enumerators
 */
class ExchangeTypeEnum
{
    /**
     * @var string
     */
    public const DIRECT = 'direct';
    /**
     * @var string
     */
    public const FANOUT = 'fanout';
    /**
     * @var string
     */
    public const TOPIC = 'topic';
    /**
     * @var string
     */
    public const HEADERS = 'headers';
}
