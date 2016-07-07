<?php
/**
 * Created by PhpStorm.
 * User: 123
 * Date: 2015-10-25
 * Time: 20:11
 */

namespace Home\Model;

class LoginModel{

    public function checkIn($loginName,$password)
    {

        $data = M('t_user');
        $loginName = 'test';
        $where = array('loginname'=> $loginName);
        $info = $data->where($where)->find();
        dump($info);die;
    }

}