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
        
    </title>

    <link href="/Money/Public/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Money/Public/webapp/css/base.css" rel="stylesheet">
    



</head>

<body class="cbp-spmenu-push">
<!--顶部导航栏-->
<header class="navbar navbar-static-top navbar-custom" id="navbar" style="">
    <nav class="navbar-menu">
        
    </nav>
    <div class="navbar-header">
        <h5 class="brand" id="title-head"></h5>
        <a class="navbar-brand" href="">
            
        </a>
    </div>
    <div class="clear"></div>
    
</header>
<!--顶部导航栏 结束-->


<!--内容部分-->
<div class="container" id="container">
    
</div>
<!--内容部分 结束-->

<!--底部导航栏-->
<footer class="navbar navbar-static-bottom navbar-custom" id="bottom-navbar" style="">
    <!--底部导航栏-->
    <ul style="height:40px;">
        <li class="bot-nav-btn"><a href="<?php echo U('Index/index');?>"><sapn class="glyphicon glyphicon-home"></sapn></a></li>
        <li class="bot-nav-btn"><a><sapn class="glyphicon glyphicon-stats"></sapn></a></li>
        <li class="bot-nav-btn"><a><sapn class="glyphicon glyphicon-user"></sapn></a></li>
        <li class="bot-nav-btn"><a><sapn class="glyphicon glyphicon-sort"></sapn></a></li>
        <li class="bot-nav-btn"><a><sapn class="glyphicon glyphicon-file"></sapn></a></li>





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