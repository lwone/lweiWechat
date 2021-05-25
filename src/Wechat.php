<?php
namespace lweiWechat;

/**
 * Class WechatService
 * @package lweiWechat
 * @method static \lweiWechat\service\OfficialAccounts               wechat(array $config = []) 微信公众号
 */
class Wechat
{
    /**
     * @param $name
     * @param array $config
     * @return mixed
     */
    public static function make($name, array $config = [])
    {
        $name        = str_replace('wechat', '', $name);
        $namespace   = 'Wechat' . ucfirst($name);
        $application = "\\lweiWechat\\service\\{$namespace}";
        return new $application($config);
    }

    /**
     * Dynamically pass methods to the application.
     *
     * @param string $name
     * @param array $arguments
     *
     * @return mixed
     */
    public static function __callStatic($name, $arguments)
    {
        return self::make($name, ...$arguments);
    }
}