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
namespace coolelephant\dingtalk\test;

use coolelephant\dingtalk\request\Request;
class Test{
    use Request;

    public function test()
    {
        $res = $this->setMethod();
        if($res)
        {
            return json_encode(['code'=>200,'msg'=>'ok','data'=>$res]);
        }
    }

}

$a = new Test();
$b = $a->test();
var_dump($b);