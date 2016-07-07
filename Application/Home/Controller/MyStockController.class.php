<?php
/**
 * Created by PhpStorm.
 * User: 123
 * Date: 2015-09-25
 * Time: 20:18
 */

namespace Home\Controller;


use Think\Controller;

class MyStockController extends  Controller{
    public function index()
    {
        $test = array(
            0 => 'sh600756',
            1 => 'sh603838',
            2 => 'sh603616',
            3 => 'sh600628',
            4 => 'sz000025',
            5 => 'sz002476',
            6 => 'sh600696',
            7 => 'sz002171',
            8 => 'sz002276',
            9 => 'sz002432',

        );

        $info = join(',',$test);
        $this->assign('data',$info);
        $info = 'http://qt.gtimg.cn/q='.$info;
        $this->assign('info',$info);
        $this->display();
    }


    public function moreInfo(){
        if(I('get.id') >= 600000)
        {
            $num = 'sh'.I('get.id');
        }
        else
        {
            $num = 'sz'.I('get.id');
        }
        $info = 'http://qt.gtimg.cn/q='.$num;
        $this->assign('data',$num);
        $this->assign('info',$info);
        $this->display();
    }
}