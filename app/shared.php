<?php
/**
 * Created by PhpStorm.
 * User: zhangpengcheng
 * Date: 16-6-13
 * Time: 上午10:11
 */

/**
 * 日志记录
 */
function setReporting()
{
    if(DEBUG == true) {
        error_reporting(E_ALL);
        ini_set('display_errors', 'On');
    } else {
        error_reporting(E_ALL);
        ini_set('display_errors', 'Off');
        ini_set('log_errors', 'On');
    }
}

/**
 * 
 * @param $value
 * @return array|mixed
 */
function stripSlashDeep($value)
{
    $value = is_array($value) ? array_map('stripSlashDeep', $value) : stripSlashDeep($value);

    return $value;
}