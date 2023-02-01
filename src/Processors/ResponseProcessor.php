<?php
/**
 *
 *  Response 请求处理
 *
 * @author   Sane
 * @link     https://github.com/SaneHe/
 * @date     2020-12-04 10:23:11
 *
 */

namespace Xiaoyinka\Boot\Processors;

use Symfony\Component\HttpFoundation\Response;

class ResponseProcessor
{
    /**
     * 增加请求数据到 log 记录
     */
    public function __invoke(Response $response)
    {
        return $response->getContent();
    }
}
