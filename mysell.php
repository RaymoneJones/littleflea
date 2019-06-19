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
    <link href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.bootcss.com/bootstrap-table/1.11.1/bootstrap-table.min.css" rel="stylesheet">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navigation">
        <div class="container-fluid">
            <div class="navigation__column left">
                <!--		  logo-->
                <div class="header__logo"><a class="ps-logo" href="home_admin.html"><img src="picture/logo2.png" alt=""></a></div>
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
                                        <li><a href="product-listing.php">手机数码</a></li>
                                        <li><a href="product-listing.php">生活百货</a></li>
                                        <li><a href="product-listing.php">家用电器</a></li>
                                        <li><a href="product-listing.php">运动户外</a></li>
                                        <li><a href="product-listing.php">家具/饰品</a></li>
                                        <li><a href="product-listing.php">游戏装备</a></li>
                                    </ul>
                                </div>
                                <div class="mega-column">
                                    <ul class="mega-item mega-features">
                                        <li><a href="product-listing.php">男装</a></li>
                                        <li><a href="product-listing.php">男鞋</a></li>
                                        <li><a href="product-listing.php">女装</a></li>
                                        <li><a href="product-listing.php">女鞋</a></li>
                                        <li><a href="product-listing.php">美妆</a></li>
                                        <li><a href="product-listing.php">箱包</a></li>
                                        <li><a href="product-listing.php">服饰配件</a></li>
                                    </ul>
                                </div>
                                <div class="mega-column">
                                    <ul class="mega-item mega-features">
                                        <li><a href="product-listing.php">乐器</a></li>
                                        <li><a href="product-listing.php">健身</a></li>
                                        <li><a href="product-listing.php">玩具</a></li>
                                        <li><a href="product-listing.php">宠物</a></li>
                                        <li><a href="product-listing.php">园艺</a></li>
                                    </ul>
                                </div>
                                <div class="mega-column">
                                    <ul class="mega-item mega-features">
                                        <li><a href="product-listing.php">课本</a></li>
                                        <li><a href="product-listing.php">习题</a></li>
                                        <li><a href="product-listing.php">教辅</a></li>
                                        <li><a href="product-listing.php">家教</a></li>
                                        <li><a href="product-listing.php">自习</a></li>
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
                                        <div class="ps-cart-item__thumbnail"><a href="shopping-cart.php"></a><img src="picture/充电器.jpg" alt=""></div>
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
<!--主要内容-->
<div>
    <ul id="myTabP" class="nav nav-tabs">
        <li class="active"><a href="#firstP" data-toggle="tab">我卖出的</a></li>
    </ul>
    <div id="myTabContent3" class="tab-content" >
        <div class="tab-pane fade in active" id="firstP" >
            <table id="matter_table1" class="table table-bordered">
            </table>
        </div>
    </div>
</div>
<!--主要内容结束-->
<main class="ps-main">
    <div class="ps-footer bg--cover" data-background="images/background/parallax.jpg">
        <div class="ps-footer__copyright">
            <div class="ps-container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                        <!--				  这里的网站还要改啊-->
                        <p>Copyright &copy; 2019.Raymone Jones All rights reserved.<a href="http://134.175.95.174/littleflea/index.html" target="_blank" title="小跳蚤">小跳蚤</a> </p>
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
<!--<script src="http://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>-->
<!--<script src="http://cdn.bootcss.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>-->
<!-- bootstrap-table.min.js -->
<script src="https://cdn.bootcss.com/bootstrap-table/1.11.1/bootstrap-table.min.js"></script>   <!--  -->
<!-- 引入中文语言包 -->
<script src="https://cdn.bootcss.com/bootstrap-table/1.11.1/locale/bootstrap-table-zh-CN.min.js"></script>
<script>
    $('#matter_table1').bootstrapTable({
            url: 'data/a_r_data.php?table=sell',
            method: "post",
            dataType: "json",
            height: 500,
            striped: true, //是否显示行间隔色
            pagination: true,                   //是否显示分页（*）
            sidePagination: "client",           //分页方式：client客户端分页，server服务端分页（*）
            pageNumber: 1,                       //初始化加载第一页，默认第一页
            pageSize: 8,                       //每页的记录行数（*）
            pageList: [8,16, 24,32],        //可供选择的每页的行数（*）
            showRefresh : true,//刷新按钮
            showToggle:true,//显示一行是否改成竖着
            showPaginationSwitch:true,//是否显示 下面的分页框
            uniqueId: "no",                     //每一行的唯一标识，一般为主键列
            toolbal:'#toolbar',
            columns: [{
                field: 'no',
                title: '商品ID',
                align: 'center'
            }, {
                field: 'goods_name',
                title: '商品名',
                align: 'center'
            }, {
                field: 'goods_from',
                title: '品牌/产地',
                align: 'center'
            }, {
                field: 'goods_detail',
                title: '商品详情',
                align: 'center'
            }, {
                field: 'goods_price',
                title: '价格',
                align: 'center'
            }, {
                field: 'goods_num',
                title: '数量',
                align: 'center'
            }, {
                field: 'goods_img',
                title: '商品图片',
                align: 'center'
            }],
            onLoadSuccess: function () {
            },
            onLoadError: function () {
                showTips("数据加载失败！");
            }
        }

    );
</script>

</body>
</html>




