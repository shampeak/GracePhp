<?php
/*
这里的信息读取示例
*/

return [
    /*
    |--------------------------------------------------------------------------
    | 调试开关
    |--------------------------------------------------------------------------
    | error_reporting(E_ERROR | E_WARNING | E_PARSE);
    | error_reporting(E_ALL | E_PARSE);
    | E_ALL ^ E_PARSE,
    */
    'debug'                 => true,
    'error_reporting'       => E_ALL ^ E_NOTICE,
    'viewpath'              => '../App/Views/',
    /*
    |--------------------------------------------------------------------------
    | 执行环境参数
    |--------------------------------------------------------------------------
    | D(dc());
    */
    'Env' => [
        'WDS'               => DIRECTORY_SEPARATOR,
        'default_timezone'  => 'PRC',
        'charset'           => 'utf-8',         //编码说明
    ],

    /*
    |--------------------------------------------------------------------------
    | App相关定义
    |--------------------------------------------------------------------------
    | 配置信息,访问 : Sham\Wise\Wise::getInstance()->_config
    */
    'App' => [
        'DefaultController'              => 'Home',
        'DefaultControllerMethod'        => 'Index',
        'DefaultControllerMethodPrefix'  => 'do',

        'ErrorPage404'    => 'Error/Error404.php',
        'ErrorPage500'    => 'Error/Error500.php',
        'ErrorPageMsg'    => 'Error/ErrorMsg.php',
        'MessagePageView' => 'Error/ErrorView.php',
    ],

];

