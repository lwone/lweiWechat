<?php
namespace lweiWechat\controller\api;

use EasyWeChat\Factory;
use think\facade\Log;

class Login
{
    /**
     * @return \think\response\Json
     */
    public function hello(){
        return json("hello lweiWechat!");
    }

    public function mini($code){
        $config = [
            'app_id' =>  sysconf('data.wxapp_appid'),
            'secret' => sysconf('data.wxapp_appkey'),

            // 下面为可选项
            // 指定 API 调用返回结果的类型：array(default)/collection/object/raw/自定义类名
            'response_type' => 'array',
            'log' => [
                'level' => 'debug',
                'file' => __DIR__.'/wechat.log',
            ],
        ];
        $app = Factory::miniProgram($config);
        $rs=$app->auth->session($code);
        Log::write($rs);
        return json("SUCCESS");
    }
}