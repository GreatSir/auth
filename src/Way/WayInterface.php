<?php
/**
 * Created by PhpStorm.
 * User: greatsir
 * Date: 2018/2/22
 * Time: 上午10:38
 */
namespace Greatsir\Auth\Way;

use Greatsir\Auth\RequestContent\RequestContent;

interface WayInterface
{
    //public function check();
    public function login(RequestContent $content);
}
