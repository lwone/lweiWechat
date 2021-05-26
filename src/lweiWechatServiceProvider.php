<?php
namespace lweiWechat;
use lweiWechat\controller\api\Login;
use think\Service;

class lweiWechatServiceProvider extends Service
{
    public function register(): void
    {
        // api - 小程序 - 授权登录
        $this->app->route->post('wechat/hello', Login::class . '@hello');
    }

    public function boot(): void
    {

    }
}