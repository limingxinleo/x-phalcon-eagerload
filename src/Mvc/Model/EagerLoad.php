<?php
// +----------------------------------------------------------------------
// | EagerLoad.php [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2017 limingxinleo All rights reserved.
// +----------------------------------------------------------------------
// | Author: limx <715557344@qq.com> <https://github.com/limingxinleo>
// +----------------------------------------------------------------------
namespace Xin\Phalcon\Mvc\Model;

use Xin\Phalcon\Mvc\Model\EagerLoad\Client;

class EagerLoad
{
    public static function load($data, $relations, $options = [])
    {
        $client = new Client($data, $relations);
        return $client->handle();
    }
}
