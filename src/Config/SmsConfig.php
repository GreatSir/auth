<?php
/**
 * Created by PhpStorm.
 * User: greatsir
 * Date: 2018/2/22
 * Time: 上午11:07
 */
/*
 * 短信的配置
 */
namespace Greatsir\Auth\Config;

final class SmsConfig
{
    const FIELDS=['mobile','code'];
    const LOGINWAY='sms';
}