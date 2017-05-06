<?php

namespace ManaPHP\Di;

use ManaPHP\Di;

/**
 * Class ManaPHP\Di\FactoryDefault
 *
 * @package di
 */
class FactoryDefault extends Di
{
    /**
     * \ManaPHP\Di\FactoryDefault constructor
     */
    public function __construct()
    {
        parent::__construct();

        $this->_services = [
            'eventsManager' => 'ManaPHP\Event\Manager',
            'alias' => 'ManaPHP\Alias',
            'configure' => 'ManaPHP\Configure',
            'crypt' => 'ManaPHP\Security\Crypt',
            'logger' => ['ManaPHP\Logger', ['ManaPHP\Logger\Adapter\File']],
            'renderer' => 'ManaPHP\Renderer',
            'serializer' => 'ManaPHP\Serializer\Adapter\JsonPhp',
            'cache' => ['ManaPHP\Cache', ['ManaPHP\Cache\Adapter\File']],
            'httpClient' => 'ManaPHP\Http\Client',
            'filesystem' => 'ManaPHP\Filesystem\Adapter\File',
            'random' => 'ManaPHP\Security\Random',
            'crossword' => 'ManaPHP\Text\Crossword',
            'swordCompiler' => 'ManaPHP\Renderer\Engine\Sword\Compiler',
        ];
    }
}