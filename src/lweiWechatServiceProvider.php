<?php
declare (strict_types=1);

namespace lweiWechat;
use lweiWechat\controller\api\Login;
use think\Service;

class lweiWechatServiceProvider extends Service
{
    public function register(): void
    {
        // api - 测试存在
        $this->app->route->post('wechat/hello', Login::class . '@hello');
        // api - 小程序 - 授权登录
        $this->app->route->post('wechat/mini', Login::class . '@mini');
    }

    public function boot(): void
    {

    }
}