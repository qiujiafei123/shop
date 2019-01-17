<?php
/**
 * Created by 七月
 * User: 七月
 * Date: 2017/2/15
 * Time: 13:40
 */

namespace app\api\controller\v1;


use app\api\controller\BaseController;
use app\api\validate\IDMustBePositiveInt;
use app\api\model\Banner as BannerModel;
use app\lib\exception\MissException;
use think\Controller;
use app\api\service\Token;
use app\api\model\User;
/**
 * Banner资源
 */ 
class Banner extends BaseController
{
    /**
     * 获取Banner信息
     * @url     /banner/:id
     * @http    get
     * @param   int $id banner id
     * @return  array of banner item , code 200
     * @throws  MissException
     */
    public function createOrUpdateUserInfo($data)
    {
        var_dump($data);exit;
        $uid = Token::getCurrentUid();
        User::updateUser($uid, $data);
    }
}