<?php
/**
 * Created by 七月.
 * Author: 七月
 * 微信公号：小楼昨夜又秋风
 * 知乎ID: 七月在夏天
 * Date: 2017/3/5
 * Time: 17:59
 */

namespace app\api\controller;

use think\Controller;

class IndexController extends Controller
{
    public function index()
    {
        return [
            'time' => date("Y-m-d H:i:s", time()),
        ];
    }
}