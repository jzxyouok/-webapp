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
        自选股
    </title>

    <link href="/Money/Public/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Money/Public/webapp/css/base.css" rel="stylesheet">
    
    <link href="/Money/Public/bower_components/swiper/css/swiper.min.css" rel="stylesheet">
    <style>
        .container{
            padding:0;
        }
        .greencolor{
            color: green;
        }
        .redcolor{
            color:red;
        }
        .leader{
            width: 100%;
            height: 40px;
            padding:5px 10px;
            border-bottom:1px solid #ccc;
        }
        .leader-content{
            color:#d93660;
            width:16%;
            font-size: 0.4rem;
            margin-top:-10px;

        }

        .leader-content span,.leader-content p{
            width:0.4rem;
            margin:0 auto;
            display:block;
            line-height: 0.4rem;

        }
        .leader-content p{
            font-size: 0.25rem;
            width:0.6rem;
            color:#999;
        }
       #mainInfo td{
            height:40px;
            line-height: 40px;
        }
    </style>


</head>

<body class="cbp-spmenu-push">
<!--顶部导航栏-->
<header class="navbar navbar-static-top navbar-custom" id="navbar" style="">
    <nav class="navbar-menu">
        
    </nav>
    <div class="navbar-header">
        <h5 class="brand" id="title-head">自选</h5>
        <a class="navbar-brand" href="<?php echo U('Index/index');?>">
            <span class="glyphicon glyphicon-menu-left"></span>
        </a>
    </div>
    <div class="clear"></div>
    
</header>
<!--顶部导航栏 结束-->


<!--内容部分-->
<div class="container" id="container">
    
    <div class="leader">
        <ul>
            <li style="width:30%; border-right: 1px solid #ccc;margin-right:10px; font-size:0.4rem">
                沪 <div style="float:right; width:20px; margin-right:50%; font-size:0.3rem;color:red">3200.00</div>
            </li>
            <li class="leader-content"><span class="glyphicon glyphicon-usd"></span><p>资金</p></li>
            <li class="leader-content"><span class="glyphicon glyphicon-file"></span><p>新闻</p></li>
            <li class="leader-content"><span class="glyphicon glyphicon-bullhorn"></span><p>公告</p></li>
            <li class="leader-content"><span class="glyphicon glyphicon-info-sign"></span><p>研报</p></li>
        </ul>
    </div>





    <div>
        <!--div class="swiper-container">
            <div class="swiper-wrapper"-->
        <table class="table">
            <thead>
            <th  class="swiper-slide" >名称</th>
            <th  class="swiper-slide">最新</th>
            <th class="swiper-slide" >涨幅</th>
            <th class="swiper-slide" >换手率</th>
            </thead>
            <tbody id="mainInfo">
            </tbody>
        </table>
        <!--/div>
    </div-->

            <div id="info" data-info="<?php echo ($info); ?>"></div>
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



    <script type="text/javascript" src="<?php echo ($info); ?>" id="tempInfo"></script>
    <script type="text/javascript" src="/Money/Public/bower_components/swiper/js/swiper.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            pagination: '.swiper-pagination',
            slidesPerView: 1,
            paginationClickable: true,
            spaceBetween: 30,
            freeMode: true
        });


        function stockData() {
            var t = "<?php echo ($data); ?>".split(",");
            var element = new Array;
            for (var i = 0; i < t.length; ++i) {
                var temp = 'v_' + t[i];
                element[i] = eval(temp).split("~");
                var stockNum = element[i][2].toString();
//                console.log(stockNum);
                if(element[i][32]>= 0 ) {
                    $("#mainInfo").append(
                            "<tr onclick='moreInfo(\""+stockNum+"\")'>" +
                                    "<td>" + element[i][1] + "</td>" +
                                    "<td class='redcolor'>" + element[i][3] + "</td>" +
                                    "<td class='redcolor'>" + element[i][32] + "%</td>" +
                                    "<td>" + element[i][38] + "%</td>" +
                            "</tr>");
                }
                else
                {
                    $("#mainInfo").append(
                            "<tr onclick='moreInfo(\""+stockNum +"\")'>" +
                            "<td>" + element[i][1] + "</td>" +
                            "<td class='greencolor'>" + element[i][3] + "</td>" +
                            "<td class='greencolor' style='text-indent: -0.5em;'>" + element[i][32] + "%</td>" +
                            "<td>" + element[i][38] + "%</td>" +
                            "</tr>");
                }

            }
//            console.log(element);   //控制台中测试数据
        }
        stockData();

        function re()
        {
            var element=document.getElementById("tempInfo");
            if(element)
            {
                element.parentNode.removeChild(element);
            }
            var head= document.getElementsByTagName('head')[0];
            var script= document.createElement('script');
            script.src = "<?php echo ($info); ?>";
            script.id = 'tempInfo';
            head.appendChild(script);
            $("#mainInfo").html("");
            stockData();
        }
        window.setInterval("re()",1500);


        function moreInfo( num)
        {
            window.location.href="<?php echo U('MyStock/moreInfo');?>?id="+num;
        }
    </script>




</html>