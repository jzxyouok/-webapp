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

        );

        $info = join(',',$test);
        $this->assign('data',$info);
        $info = 'http://qt.gtimg.cn/q='.$info;
        $this->assign('info',$info);
        $this->display();
    }
}