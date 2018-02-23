<?php
/**
 * Created by PhpStorm.
 * User: greatsir
 * Date: 2018/2/18
 * Time: 上午9:38
 */
/*
 * 登录客户端，
 * 登录方式
 * 请求内容
 */
namespace Greatsir\Auth;


use Firebase\JWT\JWT;
use Greatsir\Auth\RequestContent\RequestContent;
use Greatsir\Auth\Way\WayInterface;
class AuthClient
{
    protected $way;
    protected $request;

    /*protected $binds;

    protected $instances;

    public function bind($abstract, $concrete)
    {
        if ($concrete instanceof Closure) {
            $this->binds[$abstract] = $concrete;
        } else {
            $this->instances[$abstract] = $concrete;
        }
    }

    public function make($abstract, $parameters = [])
    {
        if (isset($this->instances[$abstract])) {
            return $this->instances[$abstract];
        }

        array_unshift($parameters, $this);

        return call_user_func_array($this->binds[$abstract], $parameters);
    }*/
    /*
     * 生成token
     */
    public static function createToken(WayInterface $way,RequestContent $content)
    {
        if(!$way instanceof WayInterface){
            throw new \Exception('无效的登录方式');
        }
        if(!$content instanceof RequestContent){
            throw new \Exception('无效的请求内容');
        }
        $token = $way->login();
        return $token;
    }
    /*
     * 验证请求头
     */
    public static function checkToken($request)
    {
        $authorized = $request->header('authorization');

        if(empty($authorized)){
            dd('缺少参数');
        }
        //校验token的数据
        $token = $authorized;
        $payload = JWT::decode($token);
        //dd($request->header('authorization'));
    }
}