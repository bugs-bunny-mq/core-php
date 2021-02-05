<?php

namespace BugsBunnyMq\CorePhp\Configurators;

use BugsBunnyMq\CorePhp\Enumerators\ExchangeTypeEnum;

/**
 * Class ExchangeConfigurator
 * @package BugsBunnyMq\CorePhp\Configurators
 */
class ExchangeConfigurator
{
    /**
     * @var string
     */
    public $name;
    /**
     * @see ExchangeTypeEnum
     * @var string
     */
    public $type;
    /**
     * @var bool
     */
    public $passive = false;
    /**
     * @var bool
     */
    public $durable = false;
    /**
     * @var bool
     */
    public $autoDelete = true;
    /**
     * @var bool
     */
    public $internal = false;
    /**
     * @var bool
     */
    public $nowait = false;
    /**
     * @var array
     */
    public $arguments = [];
    /**
     * @var string
     */
    public $ticket;
}
