<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<!--当设备为iphone6的时候font-size为50px;其他设备的，在javaScript处修改-->
<html lang="en" style="font-size: 50px;width: 100%;" id="html">

<head>
    <meta charset="UTF-8">
    <meta name="format-detection" content="telephone=no, email=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="full-screen" content="yes">
    <meta name="browsermode" content="application">
    <meta name="screen-orientation" content="portrait">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="screen-orientation" content="portrait">
    <meta name="x5-orientation" content="portrait">
    <title>
        个人中心
    </title>

    <link href="/Money/Public/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Money/Public/webapp/css/base.css" rel="stylesheet">
    

    <style>
        body{background: #e6e6e6;}
        #container{
            padding:0;
            margin-top:40px;
        }
        .background{
            width: 100%;
            height: 100%;
            background-color: pink;
            position: absolute;
            z-index: -2;
        }
    .blur {
        -webkit-filter: blur(10px); /* Chrome, Opera */
        -moz-filter: blur(10px);
        -ms-filter: blur(10px);
        filter: blur(10px);
    }
        .headImg{
            display: block;
            height: 2rem;
            width: 2rem;
            border-radius: 4rem;
            z-index:-1;
            margin: 0.5rem auto 0.1rem auto;
        }
        .myInfo{
            width: 100%;
            height: 0.8rem;;
            line-height: 0.8rem;
            padding:0 10px;
            border-top: 1px solid #999;
            background-color: #FFFFFF;
        }
        .btn{
            display: block;
            width: 80%;
            height: 0.8rem;
            margin: 0 auto;
            margin-bottom:20px;
        }
        li{float: none;}
    </style>


</head>

<body class="cbp-spmenu-push">
<!--顶部导航栏-->
<header class="navbar navbar-static-top navbar-custom" id="navbar" style="">
    <nav class="navbar-menu">
        
    </nav>
    <div class="navbar-header">
        <h5 class="brand" id="title-head">个人中心</h5>
        <a class="navbar-brand" href="<?php echo U('Index/index');?>">
            <span class="glyphicon glyphicon-menu-left"></span>
        </a>
    </div>
    <div class="clear"></div>
    
</header>
<!--顶部导航栏 结束-->


<!--内容部分-->
<div class="container" id="container">
    

    <div style="height: 5rem; width: 100%; position: relative; padding-top:20px;">
        <img src="/Money/Photo/User/1.jpg" class="background blur" >
        <img src="/Money/Photo/User/1.jpg" class="headImg">
        <center><h4>Jandou</h4></center>
    </div>
    
    <div style="height: 7rem;width: 100%; background-color: #e6e6e6; padding-top: 20px; ">

        <div>
            <h4>&nbsp;&nbsp;服务</h4>
            <ul style="display: block">
                <li class="myInfo">
                    <span class="glyphicon glyphicon-usd"></span>增值服务<span style="float: right"><span class="glyphicon glyphicon-menu-right"></span></span>
                </li>
            </ul>
        </div>
            <div>
                <h4>&nbsp;&nbsp;安全设置</h4>
                <ul style="display: block">
                    <li class="myInfo">
                        <span class="glyphicon glyphicon-phone"></span>手机号<span style="float: right">13750059992<span class="glyphicon glyphicon-menu-right"></span></span>
                    </li>
                    <li class="myInfo">
                        <span class="glyphicon glyphicon-envelope"></span>邮箱<span style="float: right">809781809@qq.com<span class="glyphicon glyphicon-menu-right"></span></span>
                    </li>
                </ul>
            </div>
                <a href="#" class="btn btn-danger">退出账号</a>
                <a href="#" class="btn btn-primary">用户反馈</a>
    </div>
    


</div>
<!--内容部分 结束-->

<!--底部导航栏-->
<footer class="navbar navbar-static-bottom navbar-custom" id="bottom-navbar" style="visibility: hidden">
    <!--底部导航栏-->
    <ul style="height:40px;">
        <li class="bot-nav-btn"><a href="<?php echo U('Index/index');?>"><sapn class="glyphicon glyphicon-home"></sapn></a></li>
        <li class="bot-nav-btn"><a href="http://xw.qq.com/m/finance/index.htm"><sapn class="glyphicon glyphicon-stats"></sapn></a></li>
        <li class="bot-nav-btn"><a href="<?php echo U('MyStock/index');?>"><sapn class="glyphicon glyphicon-user"></sapn></a></li>
        <li class="bot-nav-btn"><a><sapn class="glyphicon glyphicon-sort"></sapn></a></li>
        <li class="bot-nav-btn"><a href="#new_topic"><sapn class="glyphicon glyphicon-file"></sapn></a></li>
    </ul>
</footer>
<!--底部导航栏 结束-->

</body>

<script type="text/javascript" src="/Money/Public/bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="/Money/Public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script>
    $(function(){
        var w = document.body.clientWidth;
        if( w > 370 )
        {
            $("#html").css('font-size','50px');
        }
        if( w < 370 && w>100 )
        {
            $("#html").css('font-size','40px');
        }
    })
</script>




</html>