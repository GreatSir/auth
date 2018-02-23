<?php
/**
 * Created by PhpStorm.
 * User: greatsir
 * Date: 2018/2/22
 * Time: 上午10:55
 */
namespace Greatsir\Auth\RequestContent;

interface RequestContent
{

    public function validate($data);
}