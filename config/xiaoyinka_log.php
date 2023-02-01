<?php
/**
 * 框架记录日志 配置文件
 *
 * @author   Sane
 * @link     https://github.com/SaneHe/
 * @date     2020-12-03 17:15:21
 *
 */

return [
    // 日志文件路径
    'path' => storage_path('logs/xiaoyinka.log'),

    // 日志处理器
    'handlers' => [
        'stream'
    ],

    // 是否记录 sql 执行记录
    'log_sql_details' => true,
    // 忽略 url
    'ignore_url' => [
        //  for example: '/test'
    ],

    //忽略请求字段
    'ignore_input_fields' => [
        'password',
        'confirm_password',
    ],

    // 额外记录 headers
    'log_request_extra_headers' => [
        // for example: deviceId
    ],

    // 是否记录response
    'log_response' => true,
];
