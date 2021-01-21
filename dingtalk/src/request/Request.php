<?php
// +----------------------------------------------------------------------
// | CoolCms [ DEVELOPMENT IS SO SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2020 http://www.coolcms.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +---------------------------------------------------------------------
// | Author: Myj <815081410@qq.com>
// +----------------------------------------------------------------------
namespace coolelephant\dingtalk\request;

trait Request{

    protected static $url;
    protected static $method;
    protected static $query;
    protected static $body;

    public function request()
    {

    }

    public function setMethod()
    {
        echo 1;
    }
}