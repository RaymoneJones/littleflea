<?php
session_start();

?>
<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Head BEGIN -->
<head>
    <meta charset="utf-8">
    <title>Shopping cart | Metronic Shop UI</title>

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <meta content="Metronic Shop UI description" name="description">
    <meta content="Metronic Shop UI keywords" name="keywords">
    <meta content="keenthemes" name="author">

    <meta property="og:site_name" content="-CUSTOMER VALUE-">
    <meta property="og:title" content="-CUSTOMER VALUE-">
    <meta property="og:description" content="-CUSTOMER VALUE-">
    <meta property="og:type" content="website">
    <meta property="og:image" content="-CUSTOMER VALUE-"><!-- link to image for socio -->
    <meta property="og:url" content="-CUSTOMER VALUE-">

    <link rel="shortcut icon" href="favicon.ico">

    <!-- Fonts START -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">
    <!-- Fonts END -->

    <!-- Global styles START -->
    <!--  <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">-->
    <!--  <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->
    <!-- Global styles END -->

    <!-- Page level plugin styles START -->
    <link href="assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
    <!--  <link href="assets/plugins/owl.carousel/assets/owl.carousel.css" rel="stylesheet">-->
    <link href="assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">
    <link href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css"><!-- for slider-range -->
    <link href="assets/plugins/rateit/src/rateit.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin styles END -->

    <!-- Theme styles START -->
    <link href="assets/pages/css/components.css" rel="stylesheet">
    <link href="assets/corporate/css/style.css" rel="stylesheet">
    <link href="assets/pages/css/style-shop.css" rel="stylesheet" type="text/css">
    <link href="assets/corporate/css/style-responsive.css" rel="stylesheet">
    <link href="assets/corporate/css/themes/red.css" rel="stylesheet" id="style-color">
    <link href="assets/corporate/css/custom.css" rel="stylesheet">
    <!-- Theme styles END -->
    <!--    下面是整体框架的head-->
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
<!-- Head END -->

<!-- Body BEGIN -->
<body class="ecommerce">
<!-- BEGIN HEADER -->
<header class="header">
    <div class="header__top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-6 col-xs-12 ">
                    <p>顶部信息栏</p>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 ">
                    <div class="header__actions"><a href="login.html">退出</a>
                        <div class="btn-group ps-dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">收藏夹<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"> 收藏1</a></li>
                                <!--                                <img src="images/flag/usa.svg" alt="">-->
                                <li><a href="#">收藏 2</a></li>
                                <!--                                <img src="images/flag/singapore.svg" alt="">-->
                                <li><a href="#">收藏 3</a></li>
                                <!--                                <img src="images/flag/japan.svg" alt="">-->
                            </ul>
                        </div>
                        <div class="btn-group ps-dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">我的<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">我发布的</a></li>
                                <li><a href="#">我卖出的</a></li>
                                <li><a href="#">我买到的</a></li>
                            </ul>
                        </div>
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
                                        <li><a href="product-listing.html">手机数码</a></li>
                                        <li><a href="product-listing.html">生活百货</a></li>
                                        <li><a href="product-listing.html">家用电器</a></li>
                                        <li><a href="product-listing.html">运动户外</a></li>
                                        <li><a href="product-listing.html">家具/饰品</a></li>
                                        <li><a href="product-listing.html">游戏装备</a></li>
                                    </ul>
                                </div>
                                <div class="mega-column">
                                    <ul class="mega-item mega-features">
                                        <li><a href="product-listing.html">男装</a></li>
                                        <li><a href="product-listing.html">男鞋</a></li>
                                        <li><a href="product-listing.html">女装</a></li>
                                        <li><a href="product-listing.html">女鞋</a></li>
                                        <li><a href="product-listing.html">美妆</a></li>
                                        <li><a href="product-listing.html">箱包</a></li>
                                        <li><a href="product-listing.html">服饰配件</a></li>
                                    </ul>
                                </div>
                                <div class="mega-column">
                                    <ul class="mega-item mega-features">
                                        <li><a href="product-listing.html">乐器</a></li>
                                        <li><a href="product-listing.html">健身</a></li>
                                        <li><a href="product-listing.html">玩具</a></li>
                                        <li><a href="product-listing.html">宠物</a></li>
                                        <li><a href="product-listing.html">园艺</a></li>
                                    </ul>
                                </div>
                                <div class="mega-column">
                                    <ul class="mega-item mega-features">
                                        <li><a href="product-listing.html">课本</a></li>
                                        <li><a href="product-listing.html">习题</a></li>
                                        <li><a href="product-listing.html">教辅</a></li>
                                        <li><a href="product-listing.html">家教</a></li>
                                        <li><a href="product-listing.html">自习</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="navigation__column right">
                <form class="ps-search--header" action="do_action" method="post">
                    <input class="form-control" type="text" placeholder="宝贝只需搜一下！">
                    <button><i class="ps-icon-search"></i></button>
                </form>
                <div class="ps-cart"><a class="ps-cart__toggle" href="#"><span><i>3</i></span><i class="ps-icon-shopping-cart"></i></a>
                    <div class="ps-cart__listing">
                        <div class="ps-cart__content">
                            <!--				购物车项目1-->
                            <div class="ps-cart-item"><a class="ps-cart-item__close" href="#"></a>
                                <div class="ps-cart-item__thumbnail"><a href="product-detail.php"></a><img src="picture/充电器.jpg" alt=""></div>
                                <div class="ps-cart-item__content"><a class="ps-cart-item__title" href="product-detail.php">vivo充电器</a>
                                    <p><span>数量:<i>1</i></span><span>总价:<i>￥25</i></span></p>
                                </div>
                            </div>
                            <!--				购物车项目2-->
                            <div class="ps-cart-item"><a class="ps-cart-item__close" href="#"></a>
                                <div class="ps-cart-item__thumbnail"><a href="product-detail.php"></a><img src="picture/鞋.jpg" alt=""></div>
                                <div class="ps-cart-item__content"><a class="ps-cart-item__title" href="product-detail.php">李宁跑鞋</a>
                                    <p><span>数量:<i>1</i></span><span>总价:<i>￥70</i></span></p>
                                </div>
                            </div>
                            <!--				购物车项目3-->
                            <div class="ps-cart-item"><a class="ps-cart-item__close" href="#"></a>
                                <div class="ps-cart-item__thumbnail"><a href="product-detail.php"></a><img src="picture/吉他.jpg" alt=""></div>
                                <div class="ps-cart-item__content"><a class="ps-cart-item__title" href="product-detail.php">Taylor吉他</a>
                                    <p><span>数量:<i>1</i></span><span>总价:<i>￥800</i></span></p>
                                </div>
                            </div>
                        </div>
                        <!--			  总价-->
                        <div class="ps-cart__total">
                            <p>件数:<span>3</span></p>
                            <p>合计:<span>￥895.00</span></p>
                        </div>
                        <div class="ps-cart__footer"><a class="ps-btn" href="shopping-cart.php">去结算<i class="ps-icon-arrow-left"></i></a></div>
                    </div>
                </div>
                <div class="menu-toggle"><span></span></div>
            </div>
        </div>
    </nav>
</header>
<!-- Header END -->

<div class="main">
    <div class="container">
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
            <!-- BEGIN CONTENT -->
            <div class="col-md-12 col-sm-12">
                <h1>购物车</h1>
                <div class="goods-page">
                    <div class="goods-data clearfix">
                        <div class="table-wrapper-responsive">
                            <table summary="Shopping cart">
                                <tr>
                                    <th class="goods-page-image"></th>
                                    <th class="goods-page-description">商品信息</th>
                                    <th class="goods-page-ref-no">商品编号</th>
                                    <th class="goods-page-price">单价</th>
                                    <th class="goods-page-quantity">数量</th>
                                    <th class="goods-page-total" colspan="2">总价</th>
                                </tr>
                                <?php
                                $userid=$_SESSION['no'];
                                $all=0;
                                $conn = mysqli_connect("localhost","root","123456","flea") or die("数据库链接错误".mysqli_error());
                                $sql="select * from tb_goods,tb_cart where tb_cart.userid='$userid' and tb_cart.goods_id=tb_goods.no";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        $total=$row['num']*$row['goods_price'];
                                        $all+=$total;
                                        echo'
                                                    <tr>
                                                        <td class="goods-page-image">
                                                          <a ><img src="assets/pages/img/products/model3.jpg" alt="Berry Lace Dress"></a>
                                                        </td>
                                                        <td class="goods-page-description">
                                                          <h3><a href="product-detail.php">'.$row['goods_name'].'</a></h3>
                                                          <p><strong>'.$row['goods_from'].'</strong>'.$row['goods_tag'].' </p>
                                                          <em href="product-detail.php">更多信息</em>
                                                        </td>
                                                        <td class="goods-page-ref-no">
                                                          '.$row['goods_id'].'
                                                        </td>
                                                        <td class="goods-page-price">
                                                          <strong><span>￥</span>'.$row['goods_price'].'</strong>
                                                        </td>
                                                        <td class="goods-page-quantity">
                                                          <div class="product-quantity">
                                                              <input id="product-quantity" type="text" value="'.$row['num'].'" readonly class="form-control input-sm">
                                                          </div>
                                                        </td>
                                                        <td class="goods-page-total">
                                                       
                                                          <strong><span>￥</span>'.$total.'</strong>
                                                        </td>
                                                        <td class="del-goods-col">
                                                          <a class="del-goods" href=" ">&nbsp;</a>
                                                        </td>
                                                    </tr>';
                                    }
                                }
                                ?>

                            </table>
                        </div>
                        <div class="shopping-total">
                            <ul>
                                <li class="shopping-total-price">
                                    <em>合计</em>
                                    <strong class="price"><span>￥</span><?php
                                        echo $all;
                                        ?></strong>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <button class="btn btn-default" type="submit">返回首页 <i class="fa fa-home"></i></button>
                    <button class="btn btn-primary" type="submit">结算<i class="fa fa-check"></i></button>
                </div>
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
    </div>
</div>
<!-- BEGIN FOOTER -->
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
<!-- END FOOTER -->
<!-- Load javascripts at bottom, this will reduce page load time -->
<!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
<!--[if lt IE 9]>
<script src="assets/plugins/respond.min.js"></script>
<![endif]-->
<!--    <script src="assets/plugins/jquery.min.js" type="text/javascript"></script>-->
<script src="assets/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!--    <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>      -->
<script src="assets/corporate/scripts/back-to-top.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
<script src="assets/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
<!--    <script src="assets/plugins/owl.carousel/owl.carousel.min.js" type="text/javascript"></script>
    <script src='assets/plugins/zoom/jquery.zoom.min.js' type="text/javascript"></script>
    <script src="assets/plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript"></script> -->
<script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="assets/plugins/rateit/src/jquery.rateit.js" type="text/javascript"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js" type="text/javascript"></script><!-- for slider-range -->
<script src="assets/corporate/scripts/layout.js" type="text/javascript"></script>
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




<script type="text/javascript">
    jQuery(document).ready(function() {
        Layout.init();
        Layout.initOWL();
        Layout.initTwitter();
        Layout.initImageZoom();
        Layout.initTouchspin();
        Layout.initUniform();
        Layout.initSliderRange();
    });
</script>
<!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>