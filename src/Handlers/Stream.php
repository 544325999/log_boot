<?php
/**
 * stream
 *
 * @author   Sane
 * @link     https://github.com/SaneHe/
 * @date     2020-12-15 18:51:31
 *
 */

namespace Xiaoyinka\Boot\Handlers;

use Monolog\Handler\BufferHandler;
use Monolog\Handler\StreamHandler;

class Stream extends AbstractHandler
{
    /**
     * get the handler
     *
     * @param string $level
     */
    public function getHandler($level)
    {
        return new BufferHandler(
            (new StreamHandler(
                $this->getLogPath(),
                $this->parseLevel($level),
                true,
                0644
            ))
            ->setFormatter($this->getDefaultFormatter())
        );
    }
}
