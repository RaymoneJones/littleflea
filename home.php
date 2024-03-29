<!---->
<?php
session_start();
$conn = mysqli_connect("localhost","root","123456","flea") or die("数据库链接错误".mysqli_error());
?>
<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7"><![endif]-->
<!--[if IE 8]><html class="ie ie8"><![endif]-->
<!--[if IE 9]><html class="ie ie9"><![endif]-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <title>“小跳蚤”二手交易平台</title>
    <!-- Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow:300,400,700%7CMontserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="plugins/ps-icon/style.css">
    <!-- CSS Library-->
    <link rel="stylesheet" href="plugins/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/owl-carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css">
    <link rel="stylesheet" href="plugins/slick/slick/slick.css">
    <link rel="stylesheet" href="plugins/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="plugins/Magnific-Popup/dist/magnific-popup.css">
    <link rel="stylesheet" href="plugins/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="plugins/revolution/css/settings.css">
    <link rel="stylesheet" href="plugins/revolution/css/layers.css">
    <link rel="stylesheet" href="plugins/revolution/css/navigation.css">
    <!-- Custom-->
    <link rel="stylesheet" href="css/style.css">
    <!--HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--WARNING: Respond.js doesn't work if you view the page via file://-->
    <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!--[if IE 7]><body class="ie7 lt-ie8 lt-ie9 lt-ie10"><![endif]-->
<!--[if IE 8]><body class="ie8 lt-ie9 lt-ie10"><![endif]-->
<!--[if IE 9]><body class="ie9 lt-ie10"><![endif]-->
<body class="ps-loading">
<div class="header--sidebar"></div>
<header class="header">
    <div class="header__top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-6 col-xs-12 ">
                    <p>顶部信息栏</p>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 ">
                    <div class="header__actions"><a href="index.php">退出</a>
                        <div class="btn-group ps-dropdown"><a class="dropdown-toggle" href="collect.php" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">收藏夹<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <?php
                                $sql="select * from tb_collect,tb_goods where tb_collect.user_id = ".$_SESSION['no']." and tb_collect.status =1  and tb_collect.goods_id=tb_goods.no";
                                $result=$conn->query($sql);
                                $count=3;
                                if($result->num_rows>0){
                                    while($row=$result->fetch_assoc()){
                                        if($count>0){
                                            echo '<li><a href="collect.php">';
                                            echo $row['goods_name'];
                                            echo'</a></li>';
                                            $count--;
                                        }

                                    }
                                }
                                echo'
                                 <li><a href="collect.php">查看更多……</a></li>
                               ';
                                ?>
                            </ul>
                        </div>
                        <div class="btn-group ps-dropdown"><a class="dropdown-toggle"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">我的<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="my.php">我发布的</a></li>
                                <li><a href="mysell.php">我卖出的</a></li>
                                <li><a href="myin.php">我买到的</a></li>
                            </ul>
                        </div>
                        <div class="btn-group"><a href="goods_upload.php">商品上架</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navigation">
        <div class="container-fluid">
            <div class="navigation__column left">
                <!--		  logo-->
                <div class="header__logo"><a class="ps-logo" href="index.php"><img src="picture/logo2.png" alt=""></a></div>
                <!--		  picture/logo.png-->
            </div>
            <!--		菜单导航栏-->
            <div class="navigation__column center">
                <ul class="main-menu menu">
                    <li class="menu-item"><a href="index.php">首页</a></li>
                    <li class="menu-item "><a href="#">手机</a></li>
                    <li class="menu-item"><a href="#">数码</a></li>
                    <li class="menu-item"><a href="#">服装</a></li>
                    <li class="menu-item "><a href="#">美妆</a></li>
                    <li class="menu-item "><a href="#">运动</a></li>
                    <li class="menu-item"><a href="#">教辅</a></li>
                    <li class="menu-item menu-item-has-children has-mega-menu"><a href="#">全部分类</a>
                        <div class="mega-menu">
                            <div class="mega-wrap">
                                <div class="mega-column">
                                    <ul class="mega-item mega-features">
                                        <li><a href="search.php?name=手机数码">手机数码</a></li>
                                        <li><a href="search.php?name=生活百货">生活百货</a></li>
                                        <li><a href="search.php?name=家用电器">家用电器</a></li>
                                        <li><a href="search.php?name=运动户外">运动户外</a></li>
                                        <li><a href="search.php?name=家具/饰品">家具/饰品</a></li>
                                        <li><a href="search.php?name=游戏装备">游戏装备</a></li>
                                    </ul>
                                </div>
                                <div class="mega-column">
                                    <ul class="mega-item mega-features">
                                        <li><a href="search.php?name=男装">男装</a></li>
                                        <li><a href="search.php?name=男鞋">男鞋</a></li>
                                        <li><a href="search.php?name=女装">女装</a></li>
                                        <li><a href="search.php?name=女鞋">女鞋</a></li>
                                        <li><a href="search.php?name=美妆">美妆</a></li>
                                        <li><a href="search.php?name=箱包">箱包</a></li>
                                        <li><a href="search.php?name=服饰配件">服饰配件</a></li>
                                    </ul>
                                </div>
                                <div class="mega-column">
                                    <ul class="mega-item mega-features">
                                        <li><a href="search.php?name=乐器">乐器</a></li>
                                        <li><a href="search.php?name=健身">健身</a></li>
                                        <li><a href="search.php?name=玩具">玩具</a></li>
                                        <li><a href="search.php?name=宠物">宠物</a></li>
                                        <li><a href="search.php?name=园艺">园艺</a></li>
                                    </ul>
                                </div>
                                <div class="mega-column">
                                    <ul class="mega-item mega-features">
                                        <li><a href="search.php?name=课本">课本</a></li>
                                        <li><a href="search.php?name=习题">习题</a></li>
                                        <li><a href="search.php?name=教辅">教辅</a></li>
                                        <li><a href="search.php?name=家教">家教</a></li>
                                        <li><a href="search.php?name=自习">自习</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="navigation__column right">
                <form class="ps-search--header" action="search.php" method="post">
                    <input class="form-control" type="text" name="se" id="se" placeholder="宝贝只需搜一下！">
                    <button><i class="ps-icon-search"></i></button>
                </form>

                <div class="ps-cart"><a class="ps-cart__toggle" href="#"><i class="ps-icon-shopping-cart"></i></a>
                    <div class="ps-cart__listing">
                        <div class="ps-cart__content">
                            <?php
//                            购物车
                            $userid=$_SESSION['no'];
                            $all=0;
                            $allnum=0;

                            $sql="select * from tb_goods,tb_cart where tb_cart.userid='$userid' and tb_cart.goods_id=tb_goods.no and status=1";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    $total=$row['num']*$row['goods_price'];
                                    $all+=$total;
                                    $allnum+=$row['num'];
                                    echo '<div class="ps-cart-item"><a class="ps-cart-item__close" href="shopping-cart.php"></a>
                                        <div class="ps-cart-item__thumbnail"><a href="shopping-cart.php"></a><img src="'.$row['goods_img'].'" alt=""></div>
                                        <div class="ps-cart-item__content"><a class="ps-cart-item__title" href="shopping-cart.php">'.$row['goods_name'].'</a>
                                            <p><span>数量:<i></i>'.$row['num'].'</span><span>总价:<i>￥'.$total.'</i></span></p>
                                        </div>
                                    </div>';
                                }
                            }

                            ?>
                        <!--			  总价-->
                            <?php
                            echo '<div class="ps-cart__total">
                            <p>件数:<span>'.$allnum.'</span></p>
                            <p>合计:<span>'.$all.'</span></p>
                        </div>';
                            ?>

                        <div class="ps-cart__footer"><a class="ps-btn" href="shopping-cart.php">去结算<i class="ps-icon-arrow-left"></i></a></div>
                    </div>
                </div>
                <div class="menu-toggle"><span></span></div>
            </div>
        </div>
    </nav>
</header>

<main class="ps-main">
    <div class="ps-banner">
        <div class="rev_slider fullscreenbanner" id="home-banner">
            <ul>
                <li class="ps-banner" data-index="rs-2972" data-transition="random" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-rotate="0"><img class="rev-slidebg" src="images/slider/3.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" data-no-retina>
                    <div class="tp-caption ps-banner__header" id="layer-1" data-x="left" data-hoffset="['-60','15','15','15']" data-y="['middle','middle','middle','middle']" data-voffset="['-150','-120','-150','-170']" data-width="['none','none','none','400']" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:1000,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                        <p>广告<br> 1</p>
                    </div>
                    <div class="tp-caption ps-banner__title" id="layer21" data-x="['left','left','left','left']" data-hoffset="['-60','15','15','15']" data-y="['middle','middle','middle','middle']" data-voffset="['-60','-40','-50','-70']" data-type="text" data-responsive_offset="on" data-textAlign="['center','center','center','center']" data-frames="[{&quot;delay&quot;:1200,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                        <p class="text-uppercase">品牌</p>
                    </div>
                    <div class="tp-caption ps-banner__description" id="layer211" data-x="['left','left','left','left']" data-hoffset="['-60','15','15','15']" data-y="['middle','middle','middle','middle']" data-voffset="['30','50','50','50']" data-type="text" data-responsive_offset="on" data-textAlign="['center','center','center','center']" data-frames="[{&quot;delay&quot;:1200,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                        <p>简介</p>
                    </div><a class="tp-caption ps-btn" id="layer31" href="#" data-x="['left','left','left','left']" data-hoffset="['-60','15','15','15']" data-y="['middle','middle','middle','middle']" data-voffset="['120','140','200','200']" data-type="text" data-responsive_offset="on" data-textAlign="['center','center','center','center']" data-frames="[{&quot;delay&quot;:1500,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">立即购买<i class="ps-icon-next"></i></a>
                </li>
                <li class="ps-banner ps-banner--white" data-index="rs-100" data-transition="random" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-rotate="0"><img class="rev-slidebg" src="images/slider/2.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" data-no-retina>
                    <div class="tp-caption ps-banner__header" id="layer20" data-x="left" data-hoffset="['-60','15','15','15']" data-y="['middle','middle','middle','middle']" data-voffset="['-150','-120','-150','-170']" data-width="['none','none','none','400']" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:1000,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                        <p>广告 <br> 2</p>
                    </div>
                    <div class="tp-caption ps-banner__title" id="layer339" data-x="['left','left','left','left']" data-hoffset="['-60','15','15','15']" data-y="['middle','middle','middle','middle']" data-voffset="['-60','-40','-50','-70']" data-type="text" data-responsive_offset="on" data-textAlign="['center','center','center','center']" data-frames="[{&quot;delay&quot;:1200,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                        <p class="text-uppercase">品牌</p>
                    </div>
                    <div class="tp-caption ps-banner__description" id="layer2-14" data-x="['left','left','left','left']" data-hoffset="['-60','15','15','15']" data-y="['middle','middle','middle','middle']" data-voffset="['30','50','50','50']" data-type="text" data-responsive_offset="on" data-textAlign="['center','center','center','center']" data-frames="[{&quot;delay&quot;:1200,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                        <p>简介</p>
                    </div><a class="tp-caption ps-btn" id="layer364" href="#" data-x="['left','left','left','left']" data-hoffset="['-60','15','15','15']" data-y="['middle','middle','middle','middle']" data-voffset="['120','140','200','200']" data-type="text" data-responsive_offset="on" data-textAlign="['center','center','center','center']" data-frames="[{&quot;delay&quot;:1500,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">立即购买<i class="ps-icon-next"></i></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="ps-section--features-product ps-section masonry-root pt-100 pb-100">
        <div class="ps-container">
            <div class="ps-section__header mb-50">
                <h3 class="ps-section__title" >新鲜发布</h3>
                <ul class="ps-masonry__filter">
                    <li class="current"><a href="#" data-filter="*">全部<sup>8</sup></a></li>
                    <li><a href="#" data-filter=".nike">手机数码 <sup>1</sup></a></li>
                    <li><a href="#" data-filter=".adidas">服饰美妆 <sup>1</sup></a></li>
                    <li><a href="#" data-filter=".men">运动户外 <sup>1</sup></a></li>
                    <li><a href="#" data-filter=".women">生活百货 <sup>1</sup></a></li>
                    <li><a href="#" data-filter=".kids">学习资料 <sup>4</sup></a></li>
                    <!--			sup上标效果sub下标-->
                </ul>
            </div>
            <div class="ps-section__content pb-50">
                <div class="masonry-wrapper" data-col-md="4" data-col-sm="2" data-col-xs="1" data-gap="30" data-radio="100%">
                    <div class="ps-masonry">
                        <div class="grid-sizer"></div>

                        <?php
                        $conn = mysqli_connect("localhost","root","123456","flea") or die("数据库链接错误".mysqli_error());
                        $sql="select * from tb_goods where goods_status='1'";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            $a=array();
                            $i=0;
                            while ($row = $result->fetch_assoc()) {

                                //                                array_push($a,$row['no']);
                                echo '<form onclick="getname(this.id)" id="'.$row['no'].'" >'
                                    ?>

                                <div class="grid-item nike" >
                                    <div class="grid-item__content-wrapper">
                                        <div class="ps-shoe mb-30">
                                            <div class="ps-shoe__thumbnail">
                                                <a class="ps-shoe__favorite" href="#"><i
                                                            class="ps-icon-heart"></i></a><img  src="<?php echo $row['goods_img'];?>"
                                                                                                alt=""><a
                                                        class="ps-shoe__overlay" ></a>

                                            </div>
                                            <div class="ps-shoe__content">
                                                <div class="ps-shoe__variants">
                                                    <select class="ps-rating ps-shoe__rating">
                                                        <option value="1">1</option>
                                                        <option value="1">2</option>
                                                        <option value="1">3</option>
                                                        <option value="1">4</option>
                                                        <option value="2">5</option>
                                                    </select>
                                                </div>
                                                <div class="ps-shoe__detail">
                                                    <a class="ps-shoe__name">
                                                        <p id="namename" >
                                                            <?php
                                                            echo $row['goods_name'];
                                                            ?>
                                                        </p></a>
                                                    <p class="ps-shoe__categories"><a ><?php
                                                            echo $row['goods_class'];
                                                            ?></a>,<a ><?php
                                                            echo $row['goods_from'];
                                                            ?></a></p><span
                                                            class="ps-shoe__price"> ￥ <?php
                                                        echo $row['goods_price'];
                                                        ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </form>

                                <?php
                                $i++;
                            }
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<!--    <input type="text" id="text" style="width: 500px">-->
    <div class="ps-footer bg--cover" data-background="images/background/parallax.jpg">
        <div class="ps-footer__copyright">
            <div class="ps-container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                        <!--				  这里的网站还要改啊-->
                        <p>Copyright &copy; 2019.Raymone Jones All rights reserved.<a href="http://134.175.95.174/littleflea/index.php" target="_blank" title="小跳蚤">小跳蚤</a> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- JS Library-->
<script type="text/javascript" src="plugins/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="plugins/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
<script type="text/javascript" src="plugins/owl-carousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="plugins/gmap3.min.js"></script>
<script type="text/javascript" src="plugins/imagesloaded.pkgd.js"></script>
<script type="text/javascript" src="plugins/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="plugins/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="plugins/jquery.matchHeight-min.js"></script>
<script type="text/javascript" src="plugins/slick/slick/slick.min.js"></script>
<script type="text/javascript" src="plugins/elevatezoom/jquery.elevatezoom.js"></script>
<script type="text/javascript" src="plugins/Magnific-Popup/dist/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="plugins/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://ditu.google.cn/maps/api/js?key=AIzaSyAx39JFH5nhxze1ZydH-Kl8xXM3OK4fvcg&amp;region=GB"></script>
<script type="text/javascript" src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<!-- Custom scripts-->
<script type="text/javascript" src="js/main.js"></script>

<script>

    function getname(id){
        // document.getElementById('text').value=id;
        var goodsname=id;

        window.location.href='product-detail.php?no='+goodsname+'';

        //     $.ajax({
        //         type:"POST",
        //         url:"data.php",
        //
        //         data:{
        //             no:goodsname;
        // }
        // })
    }

    // $(".myform").click(function(){
    //     var goodsname=this.id;
    //
    // });
</script>
</body>
</html>
