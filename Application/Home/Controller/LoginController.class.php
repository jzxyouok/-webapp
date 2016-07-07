<?php
/**
 * Created by PhpStorm.
 * User: 123
 * Date: 2015-10-25
 * Time: 19:55
 */

namespace Home\Controller;
use Think\Controller;


class LoginController extends Controller {

    public function index()
    {
//        $this->loginOrNot();
        $this->display();
    }

    public function loginOrNot()
    {
        if(cookie('loginName') != NULL)
        {

        }
    }

    public function autoLogin()
    {
        $model = D('Login','Model');

        if(cookie('loginName') == NULL)
        {

            $model->checkIn(cookie('loginName'),cookie('password'));
        }
        else{
            $model->login(I('post.loginName'),I('post.password'));
        }
    }
}