<?php
/**
 * errorLog
 *
 * @author   Sane
 * @link     https://github.com/SaneHe/
 * @date     2020-12-15 18:51:31
 *
 */

namespace Xiaoyinka\Boot\Handlers;

use Monolog\Handler\BufferHandler;
use Monolog\Handler\ErrorLogHandler;

class ErrorLog extends AbstractHandler
{
    /**
     * get the handler
     *
     * @param string $level
     */
    public function getHandler($level)
    {
        return new BufferHandler(
            (new ErrorLogHandler(
                ErrorLogHandler::OPERATING_SYSTEM,
                $this->parseLevel($level)
            ))
            ->setFormatter($this->getDefaultFormatter())
        );
    }
}
