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
        xxx
    </title>

    <link href="/Money/Public/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Money/Public/webapp/css/base.css" rel="stylesheet">
    
    <link href="/Money/Public/bower_components/swiper/css/swiper.min.css" rel="stylesheet">
    <style>
        #container{padding-top:50px ;margin:0}

        .priceArea{
            width:30%;
            float: left;
            color:red;
            padding-left:5%;
        }
        #price{
            font-size: 0.5rem;;
        }
        .morePrice{
            margin-left:30%;

        }
        #changePrice,#upDown{
            font-size: 0.3rem;;
        }
        .morePrice li{
            width:50%;
            display: block;
            margin-top:5px;
            text-align: left;
            padding-left:10px;
            font-size: 0.3rem;
        }

        .morePrice ul{
            margin-right: 15px;;
        }

        img{
            width: 100%;
        }

        .fivePrice{
            float: left;
            width:30%;
            height: 6rem;
            border:1px solid #ccc;
            padding:2%;
            margin-left:10px;
        }
        .fivePrice tr{
            display: block;
            margin-top: 5px;
            font-size: 0.3rem;;
            width: 100%;
        }

        .fivePrice td{
            margin-left: 2px;
            width:32%;
            text-align: left;

        }
        .stockNews{
            float: left;
            height:5.5rem;
            width: 60%;
            margin-left: 2%;

        }
        .stockNews li{
            display: block;
            border-bottom: 1px solid #ccc;
            width: 100%;
            height: 1.5rem;
            font-size: 0.3rem;
            padding-top:5%;
        }
        .stockNews li p{
            display: block;
            float: right;
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
        <a class="navbar-brand" href="<?php echo U('MyStock/index');?>">
            <span class="glyphicon glyphicon-menu-left"></span>
        </a>
    </div>
    <div class="clear"></div>
    
</header>
<!--顶部导航栏 结束-->


<!--内容部分-->
<div class="container" id="container">
    

    <div class="swiper-container"  style="height: 11.6rem;">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div style="height: 60px; background-color:#fff" >
                    <div class="priceArea">
                        <div id="price" class="price"></div>
                        <div>
                            <span id="changePrice"></span>
                            <span id="upDown"></span>
                        </div>
                    </div>
                    <div class="morePrice">
                        <ul >
                            <li id="Volume"></li>
                            <li id="heightPrice"></li>
                            <li id="TurnoverRate"></li>
                            <li id="lowPrice"></li>
                        </ul>
                        <span class="glyphicon glyphicon-menu-right" style="float: right;"> </span>
                    </div>
                    <div>
                        <img id="imgPrice" src="" style="width: 100%;margin-top:0.3rem; ">
                    </div>
                    <div class="fivePrice">
                        <table>

                            <tbody id="fivePrice">
                            <tr><center style="font-size: 0.1rem">五档</center></tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="stockNews">
                        <ul>
                            <li>2015第三季业绩报告<br><p>2015-11-9</p></li>
                            <li>2015第2次股东大会报告<br><p>2015-11-9</p></li>
                            <li>2015第二季业绩报告<br><p>2015-11-9</p></li>
                            <li>2015第一季业绩报告<br><p>2015-11-9</p></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="swiper-slide" style="padding-top:0.5rem">
                <img src="http://image.sinajs.cn/newchart/daily/n/<?php echo ($data); ?>.gif" >
            </div>
        </div>
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



    <script type="text/javascript" src="<?php echo ($info); ?>" id="tempInfo"></script>
    <script type="text/javascript" src="/Money/Public/bower_components/swiper/js/swiper.min.js"></script>

    <script>
        var swiper = new Swiper('.swiper-container', {
            pagination: '.swiper-pagination',
            slidesPerView: 1,
            paginationClickable: true,
            spaceBetween: 30,
            freeMode: false
        });

        stockData();

        function stockData() {
            var t = "<?php echo ($data); ?>";
            var src = "http://image.sinajs.cn/newchart/min/n/"+ t +".gif";
            var temp = 'v_' + t;
            element = eval(temp).split("~");

            if(element[31] < 0 )
            {
                $(".priceArea").css("color","green");
            }
            element[6] = element[6]/10000;
            $("#title-head").html(element[1]);
            $("#price").html(element[3]);
            $("#changePrice").html(element[31]);
            $("#upDown").html(element[32]+"%");
            $("#Volume").html("成交量："+element[6].toFixed(2)+"万");
            $("#TurnoverRate").html("换手率："+element[38]+"%");
            $("#heightPrice").html("最高："+element[33]);
            $("#lowPrice").html("最低："+element[34]);
            $("#imgPrice").attr("src",src);

            var num=6;

            for(var i = 28 ; i>=19; i=i-2)
            {
                num--;
                $("#fivePrice").append("<tr >"+
                "<td style='font-weight: bolder'>卖"+num+"</td>"+
                "<td style='color: red;''>"+element[i-1]+"</td>"+
                "<td style='color: blue;text-align: right'>"+element[i]+"</td>"+
                "</tr>");


            }
            num=0;
            $("#fivePrice").append("<tr style='border-bottom:1px solid #ccc'></tr>");
            for(var i = 9 ; i<=17; i=i+2)
            {
                num++;
                $("#fivePrice").append("<tr >"+
                "<td style='font-weight: bolder'>买"+num+"</td>"+
                "<td style='color: red;''>"+element[i]+"</td>"+
                "<td style='color: blue;text-align: right'>"+element[i+1]+"</td>"+
                "</tr>");
            }
            console.log(element);   //控制台中测试数据
        }

        // function re()
        // {
        //     var element=document.getElementById("tempInfo");
        //     if(element)
        //     {
        //         element.parentNode.removeChild(element);
        //     }
        //     var head= document.getElementsByTagName('head')[0];
        //     var script= document.createElement('script');
        //     script.src = "<?php echo ($info); ?>";
        //     script.id = 'tempInfo';
        //     head.appendChild(script);
        //     $("#mainInfo").html("");
        //     stockData();
        // }
        // window.setInterval("re()",1500);
    </script>





</html>