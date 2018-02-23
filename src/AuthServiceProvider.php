<?php
/**
 * Created by PhpStorm.
 * User: greatsir
 * Date: 2018/2/17
 * Time: 上午10:04
 */
namespace Greatsir\Auth;

use function foo\func;
use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    //protected $defer = true;
    public function boot(Request $request)
    {
        //dd($request->header());
        /*$this->app['authClient']->test(function ($request){
           dd($request->header());
        });*/
        //jwt配置文件
        //$this->app->configure('jwt');

        //获取扩展包配置文件的真实路径
        //$path = realpath(__DIR__ . '/../../config/jwt.php');

        //将扩展包的配置文件merge进用户的配置文件中
        //$this->mergeConfigFrom($path, 'jwt');
        /*$this->app['authClient']->viaRequest('api', function ($request) {
            if ($request->input('api_token')) {
                return User::where('api_token', $request->input('api_token'))->first();
            }
        });*/

    }
    //注册实例到容器
    public function register()
    {
        $this->app->singleton('authClient',function(){
            //把app传递过去
            return new AuthClient();
        });
    }


}