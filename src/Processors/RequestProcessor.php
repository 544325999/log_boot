<?php
/**
 * Request 请求处理
 *
 * @author   Sane
 * @link     https://github.com/SaneHe/
 * @date     2020-12-04 10:23:11
 *
 */

namespace Xiaoyinka\Boot\Processors;

use Monolog\Utils;
use Illuminate\Http\Request;

class RequestProcessor
{
    /**
     * 增加请求数据到 log 记录
     */
    public function __invoke(Request $request)
    {
        return json_encode($request->except(config('xiaoyinka_log.ignore_input_fields')), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    }
}
