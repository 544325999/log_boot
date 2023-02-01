<?php
/**
 * 服务注册
 *
 * @author   Sane
 * @link     https://github.com/SaneHe/
 * @date     2020-12-07 14:50:23
 *
 */

namespace Xiaoyinka\Boot\Providers;

use Illuminate\Support\ServiceProvider;
use Xiaoyinka\Boot\Middleware\ActionLog;

class XiaoyinkaProvider extends ServiceProvider
{
    /**
     * 注册所需服务
     */
    public function register()
    {
        //请求 & 响应记录中间件
        method_exists($this->app, 'middleware') ? $this->app->middleware(ActionLog::class) : $this->app['router']->middleware('action_log', ActionLog::class);

        //记录 sql
        if (config('xiaoyinka_log.log_sql_details')) {
            $this->app->register(SqlProvider::class);
        }

        // 日志重写
        $this->app->register(LogProvider::class);
    }
}
