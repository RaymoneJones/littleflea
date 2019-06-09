<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>“小跳蚤”二手交易平台</title>
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/index.css">
    <style>

        .badge:empty {
            display: none;
        }
        .back_to_top{
            position: fixed;
            bottom:30px;
            right: 30px;
            width: 40px;
            height: 40px;
            border:0px;
        }
    </style>
</head>
<body>
<button class="back_to_top">返回顶部</button>
<!--顶部导航栏-->
<div name="top" style="margin: 0%;padding: 0%">
    <nav class="navbar navbar-default " role="navigation" style="margin: 0%;padding: 0%;border: transparent">
        <div class="container-fluid">
            <div>
                <ul class="nav nav-pills">
                    <li class="active"><a href="#">首页</a></li>
<!--                    <li><a href="#">标签1</a></li>-->
<!--                    <li><a href="#">标签2</a></li>-->
<!--                    <li><a href="#">标签3</a></li>-->
<!--                    <li class="dropdown">-->
<!--                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">-->
<!--                            标签4<span class="caret"></span>-->
<!--                        </a>-->
<!--                        <ul class="dropdown-menu">-->
<!--                            <li><a href="#">下拉</a></li>-->
<!--                            <li><a href="#">下拉</a></li>-->
<!--                            <li><a href="#">下拉</a></li>-->
<!--                            <li class="divider"></li>-->
<!--                            <li><a href="#">分离的链接</a></li>-->
<!--                        </ul>-->
<!--                    </li>-->
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#"><span class="glyphicon glyphicon-envelope"></span>消息

                                <?php
                                $num=1;
                                if($num!=0){
                                    echo "<span class=\"badge\" style='background-color: orange'>$num</span>";
                                }
                                ?>
                            </a>
                        </li>


                        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span>购物车 </a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-star"></span>收藏夹 </a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>我的<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">已买到的宝贝</a></li>
                                <li><a href="#">我的足迹</a></li>
                                <!--                        <li><a href="#">Jasper Report</a></li>-->
                                <!--                        <li class="divider"></li>-->
                                <!--                        <li><a href="#">分离的链接</a></li>-->
                                <!--                        <li class="divider"></li>-->
                                <!--                        <li><a href="#">另一个分离的链接</a></li>-->
                            </ul>
                        </li>
                        <li><a href="#"><span class="glyphicon glyphicon-log-out"></span>退出</a></li>
                    </ul>
                </ul>


            </div>
        </div>
    </nav>
</div>
<!--搜索框-->
<div id="fixedMenu"  style="width: 100%;background-color: transparent;border: transparent">
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="width: auto">
        <form class="navbar-form navbar-left" role="search" style="margin-left: 30%;">
            <!--            style="margin-left: 30%;"-->
            <div class="form-group" style="width: 180%">
                <div style="float: left;width: auto" >
                    <input type="text" class="form-control" placeholder="搜一下就发现宝贝了！" style="width: 200%;float: left">
                </div>
                <div style="float: right;width: auto">
                    <button type="submit" class="btn btn-default" style="float: left" >搜索</button>
                </div>

            </div>

        </form>
    </nav>
</div>

    <!--    轮播广告开始-->
    <div>
        <div class="col-md-8 col-md-push-2" style="float: ">
            <div id="myCarousel" class="carousel slide">
                <!-- 轮播（Carousel）指标 -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <!-- 轮播（Carousel）项目 -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="../picture/flea.png" alt="First slide">
                        <div class="carousel-caption">标题 1</div>
                    </div>
                    <div class="item">
                        <img src="../picture/flea.png" alt="Second slide">
                        <div class="carousel-caption">标题 2</div>
                    </div>
                    <div class="item">
                        <img src="../picture/flea.png" alt="Third slide">
                        <div class="carousel-caption">标题 3</div>
                    </div>
                </div>
                <!-- 轮播（Carousel）导航 -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
<!--侧边导航栏-->
<div id="fixedMenu1"  style="width: 10%;background-color: transparent;border: transparent">
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="width: auto">
        <form class="navbar-form navbar-left" role="search" style="margin-left: 30%;">
            <!--            style="margin-left: 30%;"-->
            <div class="form-group" style="width: 180%">
                <div style="float: left;width: auto" >
                    <input type="text" class="form-control" placeholder="搜一下就发现宝贝了！" style="width: 200%;float: left">
                </div>
                <div style="float: right;width: auto">
                    <button type="submit" class="btn btn-default" style="float: left" >搜索</button>
                </div>

            </div>

        </form>
    </nav>
</div>



















<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<a class="back-to-top" href="#top">返回顶部</a>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


</body>
</html>
<script type="text/javascript" src="http://cdn.bootcss.com/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        var ie6 = /msie 6/i.test(navigator.userAgent)
            , dv = $('#fixedMenu'), st;
        dv.attr('otop', dv.offset().top); //存储原来的距离顶部的距离
        $(window).scroll(function () {
            st = Math.max(document.body.scrollTop || document.documentElement.scrollTop);
            if (st >= parseInt(dv.attr('otop'))) {
                if (ie6) {//IE6不支持fixed属性，所以只能靠设置position为absolute和top实现此效果
                    dv.css({ position: 'absolute', top: st });
                }
                else if (dv.css('position') != 'fixed') dv.css({ 'position': 'fixed', top: 0 });
            } else if (dv.css('position') != 'static') dv.css({ 'position': 'static' });
        });
    });
    $(function () {
        var ie6 = /msie 6/i.test(navigator.userAgent)
            , dv = $('#fixedMenu1'), st;
        dv.attr('otop', dv.offset().top); //存储原来的距离顶部的距离
        $(window).scroll(function () {
            st = Math.max(document.body.scrollTop || document.documentElement.scrollTop);
            if (st >= parseInt(dv.attr('otop'))) {
                if (ie6) {//IE6不支持fixed属性，所以只能靠设置position为absolute和top实现此效果
                    dv.css({ position: 'absolute', top: st });
                }
                else if (dv.css('position') != 'fixed') dv.css({ 'position': 'fixed', top: 0 });
            } else if (dv.css('position') != 'static') dv.css({ 'position': 'static' });
        });
    });
    var backButton=$('.back_to_top');
    function backToTop() {
        $('html,body').animate({
            scrollTop: 0
        }, 200);
    }
    backButton.on('click', backToTop);

    $(window).on('scroll', function () {/*当滚动条的垂直位置大于浏览器所能看到的页面的那部分的高度时，回到顶部按钮就显示 */
        if ($(window).scrollTop() > $(window).height())
            backButton.fadeIn();
        else
            backButton.fadeOut();
    });
    $(window).trigger('scroll');/*触发滚动事件，避免刷新的时候显示回到顶部按钮*/
</script>

