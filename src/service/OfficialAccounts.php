<?php
namespace lweiWechat\service;

use EasyWeChat\Factory;

/**
 * 公众号类库
 * Class OfficialAccounts
 * @package lweiWechat\service
 */
class OfficialAccounts
{
    public function __construct($config)
    {
        $this->wechat = Factory::officialAccount($config);
    }
}