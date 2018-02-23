<?php
/**
 * Created by PhpStorm.
 * User: greatsir
 * Date: 2018/2/22
 * Time: 上午10:49
 */
namespace Greatsir\Auth\Way\social;

use Greatsir\Auth\RequestContent\RequestContent;
use Greatsir\Auth\Way\WayInterface;

class Wechat implements WayInterface
{
    public function login(RequestContent $content)
    {
        // TODO: Implement login() method.
        $content->validate();//校验请求字段

    }
    public function check()
    {
        // TODO: Implement check() method.
    }
}