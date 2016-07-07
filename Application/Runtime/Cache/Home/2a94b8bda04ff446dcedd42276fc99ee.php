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
        我的股票webapp
    </title>

    <link href="/Money/Public/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Money/Public/webapp/css/base.css" rel="stylesheet">
    
    <link href="/Money/Public/bower_components/swiper/css/swiper.min.css" rel="stylesheet">
    <style>
        /*div{*/
            /*border:1px solid red;*/
        /*}*/
        body{
            background-color: #efefef;
        }
        .circlebox{
            width:  1.1rem;
            margin: 0 0.3rem;
            margin-bottom: 0.3rem;
            float:  left;
            text-align: center;
        }
        .circleBtn{
            height:             1rem;
            width:              1rem;
            border-radius:      2rem;
            display:            block;
        }
        .circleBtn span{
            display:     block;
            line-height: 0.90rem;
            font-size:   0.75rem;
            /*margin-left: 0.1rem;*/
            color:       #FFFFFF;
        }

        .slidesImg{
            border-radius: 10px;
            width: 100%;
            height: 2.5rem;
            z-index: -1;
        }
        .circleName{
            width: 110%;
            margin-left:-0.1rem;
            font-size: 0.2rem;
            text-align: center;

        }

        .navbar-menu span{

            color:#FFFFFF;
            font-size: 0.5rem;
        }

        .navbar-menu input{
            line-height: 40px;
            border:0;
            border-radius: 5px;
            width:0;
            transition:  0.5s;
            -moz-transition:  0.5s; /* Firefox 4 */
            -webkit-transition:  0.5s; /* Safari 和 Chrome */
            -o-transition:  0.5s; /* Opera */
        }

        .new_topic{
            border:1px solid #999;
            border-left:0;
            border-right: 0;
            height:0.8rem;
            line-height: 0.8rem;

        }
        .news_content{
            height:2rem;
            padding:0.1rem;
            border-bottom:1px solid #ccc;
            width:90%;
            margin:0.3rem auto;

        }
        .news_content a{
            display: block;
            font-size: 0.3rem;
            font-weight: bold;
            color:#000000;
            width: 60%;
            height: 70%;
            float: left;
        }
        .news_content img{
            width:30%;
            display: inline;;
            float: right;
            border:1px solid #999;
            border-radius: 2px;
            height:100%;
        }
        .news_content p{
            margin-bottom:1px;
            float: left;
        }

    </style>


</head>

<body class="cbp-spmenu-push">
<!--顶部导航栏-->
<header class="navbar navbar-static-top navbar-custom" id="navbar" style="">
    <nav class="navbar-menu">
        
    <div>
        <input type="text" id="stockNum">
        <span id="searchBtn" class="glyphicon glyphicon-search"></span>
    </div>

    </nav>
    <div class="navbar-header">
        <h5 class="brand" id="title-head"></h5>
        <a class="navbar-brand" href="<?php echo U('MyInfo/index');?>">
            Jandou
        </a>
    </div>
    <div class="clear"></div>
    
</header>
<!--顶部导航栏 结束-->


<!--内容部分-->
<div class="container" id="container">
    
    <!--开始的入口圆形按钮-->
    <div style="height: 4rem; width: 100%; border-bottom: 1px solid #ccc; background-color: #FFFFFF;   padding-left: 15px; padding-top: 10px; padding-right: 15px;" class="swiper-container" >
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="width: 100%;">
                <div class="circlebox">
                <a href="<?php echo U('MyStock/index');?>" class="circleBtn" style="background-color: #fd5252;"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
                 <p class="circleName">自选股</p>
                </div>
                <div class="circlebox">
                    <a href="http://xw.qq.com/m/finance/index.htm" class="circleBtn" style="background-color: #527aca;"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span></a>
                    <p class="circleName">大盘数据</p>
                </div>
                <div class="circlebox">
                    <a href="#" class="circleBtn" style="background-color: #e88952;"><span class="glyphicon glyphicon-yen" aria-hidden="true"></span></a>
                    <p class="circleName">总资产</p>
                </div>
                <div class="circlebox">
                    <a href="#" class="circleBtn" style="background-color: #8c65c3;"><span class="glyphicon glyphicon-book" aria-hidden="true"></span></a>
                    <p class="circleName">记账本</p>
                </div>
                <div class="circlebox">
                    <a href="#" class="circleBtn" style="background-color: #fdbe44;"><span class="glyphicon glyphicon-list" aria-hidden="true"></span></a>
                    <p class="circleName">涨跌排名</p>
                </div>
                <div class="circlebox">
                    <a href="#" class="circleBtn" style="background-color: #fd6601;"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span></a>
                    <p class="circleName">股民聊</p>
                </div>
                <div class="circlebox">
                    <a href="#new_topic" class="circleBtn" style="background-color: #d6332c;"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></a>
                    <p class="circleName">财经资讯</p>
                </div>
            </div>
        </div>
    </div>
    <!--开始的入口圆形按钮 结束-->


    <div style="height: 2.5rem; width: 100%;margin-top:20px; padding:0 15px;">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="/Money/Photo/IndexImg/3.jpg" class="slidesImg"></div>
                <div class="swiper-slide"><img src="/Money/Photo/IndexImg/2.jpg" class="slidesImg"></div>
                <div class="swiper-slide"><img src="/Money/Photo/IndexImg/1.jpg" class="slidesImg"></div>
            </div>

        </div>
    </div>


    <div style="height: 600px; width: 100%; padding:20px 0;">

        <div class="new_topic" id="new_topic">
            热点新闻
        </div>
        <div class="news_content">
            <a href="http://view.inews.qq.com/a/FIN2015102501316003">英国人：谁是李嘉诚？</a>
            <img src="http://inews.gtimg.com/newsapp_ls/0/80509882_150120/0">
            <p>2015-10-13</p>
        </div>
        <div class="news_content">
            <a href="http://xw.qq.com/finance/20151025021644/FIN2015102502164403">许家印财技：高调挺股价</a>
            <img src="http://inews.gtimg.com/newsapp_ls/0/80654857_150120/0">
            <p>2015-10-13</p>
        </div>
        <div class="news_content">
            <a href="http://xw.qq.com/finance/20151025021657/FIN2015102502165702">未赢得价格战 沙特在制造噩梦</a>
            <img src="http://inews.gtimg.com/newsapp_ls/0/80655682_150120/0">
            <p>2015-10-13</p>
        </div>
        <div class="news_content">
            <a href="http://xw.qq.com/finance/20151025022705/FIN2015102502270503">李克强:13亿人经济账了然于胸</a>
            <img src="http://inews.gtimg.com/newsapp_ls/0/80637382_150120/0">
            <p>2015-10-13</p>
        </div>

        <div class="news_content">
            <a href="http://xw.qq.com/finance/20151025009292/FIN2015102500929203">富豪排名：谁在主导商业世界</a>
            <img src="http://inews.gtimg.com/newsapp_ls/0/80495760_150120/0">
            <p>2015-10-13</p>
        </div>
        <div class="news_content">
            <a href="http://xw.qq.com/finance/20151025026983/FIN2015102502698305">“十三五”十个任务目标公布</a>
            <img src="http://inews.gtimg.com/newsapp_ls/0/80663617_150120/0">
            <p>2015-10-13</p>
        </div>

    </div>


</div>
<!--内容部分 结束-->

<!--底部导航栏-->
<footer class="navbar navbar-static-bottom navbar-custom" id="bottom-navbar" style="">
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



    <script type="text/javascript" src="/Money/Public/bower_components/swiper/js/swiper.min.js"></script>
    <script>
        var mySwiper = new Swiper('.swiper-container', {
            autoplay: 5000 //可选选项，自动滑动
        })

        $(function(){
            $("#searchBtn").click(function(){
                if($("#stockNum").val() == "")
                {
                    $("#stockNum").css("width","4rem");
                }
                else{
                    $("#stockNum").val("") ;
                    $("#stockNum").css("width","0");
                }
            });
        })
    </script>



</html>