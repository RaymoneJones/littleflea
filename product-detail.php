<?php
session_start();
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
<!--<link href="apple-touch-icon.png" rel="apple-touch-icon">-->
<!--<link href="favicon.png" rel="icon">-->
<!--<meta name="author" content="Nghia Minh Luong">-->
<!--<meta name="keywords" content="Default Description">-->
<!--<meta name="description" content="Default keyword">-->
<title>商品详情</title>
<!-- Fonts-->
<!--<link href="https://fonts.googleapis.com/css?family=Archivo+Narrow:300,400,700%7CMontserrat:300,400,500,600,700,800,900" rel="stylesheet">-->
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
				<div class="header__logo"><a class="ps-logo" href="home.php"><img src="picture/logo2.png" alt=""></a></div>
				<!--		  picture/logo.png-->
			</div>
			<!--		菜单导航栏-->
			<div class="navigation__column center">
				<ul class="main-menu menu">
					<li class="menu-item menu-item-has-children dropdown"><a href="index.php">首页</a>
					</li>
					<li class="menu-item menu-item-has-children has-mega-menu"><a href="#">手机</a></li>
					<li class="menu-item"><a href="#">数码</a></li>
					<li class="menu-item"><a href="#">服装</a></li>
					<li class="menu-item menu-item-has-children dropdown"><a href="#">美妆</a>
					</li>
					<li class="menu-item menu-item-has-children dropdown"><a href="#">运动</a>
					</li>
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
										<!--                                        <li><a href="product-listing.html">FAN GEAR</a></li>-->
									</ul>
								</div>
								<div class="mega-column">
									<!--                        					  <h4 class="mega-heading">Shoes</h4>-->
									<ul class="mega-item mega-features">
										<li><a href="product-listing.html">男装</a></li>
										<li><a href="product-listing.html">男鞋</a></li>
										<li><a href="product-listing.html">女装</a></li>
										<li><a href="product-listing.html">女鞋</a></li>
										<li><a href="product-listing.html">美妆</a></li>
										<li><a href="product-listing.html">箱包</a></li>
										<li><a href="product-listing.html">服饰配件</a></li>
										<!--                                        <li><a href="product-listing.html">Baseball</a></li>-->
									</ul>
								</div>
								<div class="mega-column">
									<!--                        					  <h4 class="mega-heading">CLOTHING</h4>-->
									<ul class="mega-item mega-features">
										<li><a href="product-listing.html">乐器</a></li>
										<li><a href="product-listing.html">健身</a></li>
										<li><a href="product-listing.html">玩具</a></li>
										<li><a href="product-listing.html">宠物</a></li>
										<li><a href="product-listing.html">园艺</a></li>
										<!--                                        <li><a href="product-listing.html">Pants & Tights</a></li>-->
										<!--                                        <li><a href="product-listing.html">Shorts</a></li>-->
									</ul>
								</div>
								<div class="mega-column">
									<!--                        					  <h4 class="mega-heading">Accessories</h4>-->
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
				<div class="ps-cart"><a class="ps-cart__toggle" href="#"><i class="ps-icon-shopping-cart"></i></a>
                    <div class="ps-cart__listing">
                        <div class="ps-cart__content">
                            <?php
                            //                            购物车
                            $userid=$_SESSION['no'];
                            $all=0;
                            $allnum=0;
                            $conn = mysqli_connect("localhost","root","123456","flea") or die("数据库链接错误".mysqli_error());
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
                        </div>

                        <div class="ps-cart__footer"><a class="ps-btn" href="shopping-cart.php">去结算<i class="ps-icon-arrow-left"></i></a></div>
                    </div>
				</div>
				<div class="menu-toggle"><span></span></div>
			</div>
		</div>
	</nav>
</header>

<main class="ps-main">
  <div class="test">
	<div class="container">
	  <div class="row">
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
			</div>
	  </div>
	</div>
  </div>
  <div class="ps-product--detail pt-60">
	<div class="ps-container">
	  <div class="row">
		<div class="col-lg-10 col-md-12 col-lg-offset-1">
		  <div class="ps-product__thumbnail">
<!--			  左侧预览列-->
<!--			<div class="ps-product__preview">-->
<!--			  <div class="ps-product__variants">-->
<!--				<div class="item"><img src="picture/吉他高清.jpg" alt=""></div>-->
<!--				  <div class="item"><img src="picture/2.jpg" alt=""></div>-->
<!--				  <div class="item"><img src="picture/3.jpg" alt=""></div>-->
<!--				  <div class="item"><img src="picture/4.jpg" alt=""></div>-->
<!--			  </div><a class="popup-youtube ps-product__video" href=""><img src="picture/吉他高清.jpg" alt=""><i class="fa fa-play"></i></a>-->
<!--			</div>-->
			<div class="ps-product__image">
                <?php
                $conn = mysqli_connect("localhost","root","123456","flea") or die("数据库链接错误".mysqli_error());
                $sql="select * from tb_goods where no = ".$_GET['no']." ";
                $result=$conn->query($sql);
                $row = $result->fetch_assoc();
                ?>
			  <div class="item"><img class="zoom" src="<?php echo $row['goods_img'] ?>" alt="" data-zoom-image="<?php echo $row['goods_img'] ?>"></div>
<!--			  <div class="item"><img class="zoom" src="picture/2.jpg" alt="" data-zoom-image="picture/2.jpg"></div>-->
<!--			  <div class="item"><img class="zoom" src="picture/3.jpg" alt="" data-zoom-image="picture/3.jpg"></div>-->
<!--				<div class="item"><img class="zoom" src="picture/4.jpg" alt="" data-zoom-image="picture/4.jpg"></div>-->
			</div>
		  </div>
		  <div class="ps-product__thumbnail--mobile">
			<div class="ps-product__main-img"><img src="<?php echo $row['goods_img'] ?>" alt=""></div>
			<div class="ps-product__preview owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="20" data-owl-nav="true" data-owl-dots="false" data-owl-item="3" data-owl-item-xs="3" data-owl-item-sm="3" data-owl-item-md="3" data-owl-item-lg="3" data-owl-duration="1000" data-owl-mousedrag="on"><img src="<?php echo $row['goods_img'] ?>" alt=""></div>
		  </div>
		  <div class="ps-product__info">
			<div class="ps-product__rating">
			  <select class="ps-rating">
				<option value="1">1</option>
				<option value="1">2</option>
				<option value="1">3</option>
				<option value="1">4</option>
				<option value="2">5</option>
			  </select>
<!--				<a href="#">(Read all 8 reviews)</a>-->
			</div>
              <?php
//              <del>￥'.$row["goods_price"].'</del>
//                    $conn = mysqli_connect("localhost","root","123456","flea") or die("数据库链接错误".mysqli_error());
//                    $sql="select * from tb_goods where no = ".$_GET['no']." ";
//                    $result=$conn->query($sql);
//                    $row = $result->fetch_assoc();
              echo '<h1>'.$row["goods_name"].'</h1>
                           <input type="text" style="visibility: hidden" name="goods_no" id="'.$row['no'].'" >

			<p class="ps-product__category"><a href="#">品牌/产地： '.$row["goods_from"].'</a><a href="#"> 类别：'.$row["goods_class"].'</a>,<a href="#">标签： '.$row["goods_tag"].'</a></p>
			<h3 class="ps-product__price">￥'.$row["goods_price"].'</h3>
			
			<div class="ps-product__block ps-product__quickview">
			  <h4>简述</h4>
			  <p>'.$row["goods_detail"].'</p>
			</div>
			<div class="ps-product__block ps-product__style">';
			?>
			</div>
			<div class="ps-product__shopping">
                <?php
                echo'<a class="ps-btn mb-10" id="add" href="addcart.php?no='.$row['no'].'">加入购物车<i class="ps-icon-next"></i></a>'
                ?>
			  <div class="ps-product__actions"><a class="mr-10" href="whishlist.html"><i class="ps-icon-heart"></i></a><a href="compare.html"><i class="ps-icon-share"></i></a></div>
			</div>
		  </div>
		  <div class="clearfix"></div>
		  <div class="ps-product__content mt-50">
			<ul class="tab-list" role="tablist">
			  <li class="active"><a href="#tab_01" aria-controls="tab_01" role="tab" data-toggle="tab">详情</a></li>
			  <li><a href="#tab_02" aria-controls="tab_02" role="tab" data-toggle="tab">评价</a></li>
<!--			  <li><a href="#tab_03" aria-controls="tab_03" role="tab" data-toggle="tab">PRODUCT TAG</a></li>-->
<!--			  <li><a href="#tab_04" aria-controls="tab_04" role="tab" data-toggle="tab"></a></li>-->
			</ul>
		  </div>
		  <div class="tab-content mb-60">
			<div class="tab-pane active" role="tabpanel" id="tab_01">
                <p><?php
                    echo $row['goods_detail'];
                    ?></p>
			  <p>喜欢的可议价，接小刀，拒绝屠龙刀。</p>
			</div>
			<div class="tab-pane" role="tabpanel" id="tab_02">
                <p class="mb-20">0条关于 <strong><?php
                        echo $row['goods_name'];
                        ?></strong>的评价</p>
<!--			  <div class="ps-review">-->
<!--				<div class="ps-review__thumbnail"><img src="images/user/1.jpg" alt=""></div>-->
<!--				<div class="ps-review__content">-->
<!--				  <header>-->
<!--					<select class="ps-rating">-->
<!--					  <option value="1">1</option>-->
<!--					  <option value="1">2</option>-->
<!--					  <option value="1">3</option>-->
<!--					  <option value="1">4</option>-->
<!--					  <option value="5">5</option>-->
<!--					</select>-->
<!--					<p>By<a href=""> Alena Studio</a> - November 25, 2017</p>-->
<!--				  </header>-->
<!--				  <p>Soufflé danish gummi bears tart. Pie wafer icing. Gummies jelly beans powder. Chocolate bar pudding macaroon candy canes chocolate apple pie chocolate cake. Sweet caramels sesame snaps halvah bear claw wafer. Sweet roll soufflé muffin topping muffin brownie. Tart bear claw cake tiramisu chocolate bar gummies dragée lemon drops brownie.</p>-->
<!--				</div>-->
<!--			  </div>-->
			  <form class="ps-product__review" action="_action" method="post">
				<h4>发表您的评价</h4>
				<div class="row">
					  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
						<div class="form-group">
						  <label>用户名:<span>*</span></label>
						  <input class="form-control" type="text" placeholder="">
						</div>
						<div class="form-group">
						  <label>Email:<span>*</span></label>
						  <input class="form-control" type="email" placeholder="">
						</div>
						<div class="form-group">
						  <label>评分<span></span></label>
						  <select class="ps-rating">
							<option value="1">1</option>
							<option value="1">2</option>
							<option value="1">3</option>
							<option value="1">4</option>
							<option value="5">5</option>
						  </select>
						</div>
					  </div>
					  <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 ">
						<div class="form-group">
						  <label>评价详情:</label>
						  <textarea class="form-control" rows="6"></textarea>
						</div>
						<div class="form-group">
						  <button class="ps-btn ps-btn--sm">提交<i class="ps-icon-next"></i></button>
						</div>
					  </div>
				</div>
			  </form>
			</div>
<!--			<div class="tab-pane" role="tabpanel" id="tab_03">-->
<!--			  <p>Add your tag <span> *</span></p>-->
<!--			  <form class="ps-product__tags" action="_action" method="post">-->
<!--				<div class="form-group">-->
<!--				  <input class="form-control" type="text" placeholder="">-->
<!--				  <button class="ps-btn ps-btn&#45;&#45;sm">Add Tags</button>-->
<!--				</div>-->
<!--			  </form>-->
<!--			</div>-->
<!--			<div class="tab-pane" role="tabpanel" id="tab_04">-->
<!--			  <div class="form-group">-->
<!--				<textarea class="form-control" rows="6" placeholder="Enter your addition here..."></textarea>-->
<!--			  </div>-->
<!--			  <div class="form-group">-->
<!--				<button class="ps-btn" type="button">Submit</button>-->
<!--			  </div>-->
<!--			</div>-->
		  </div>
		</div>
	  </div>
	</div>
  </div>
  <div class="ps-section ps-section--top-sales ps-owl-root pt-40 pb-80">
	<div class="ps-container">
	  <div class="ps-section__header mb-50">
		<div class="row">
			  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">
				<h3 class="ps-section__title" data-mask="Related items">猜你喜欢</h3>
			  </div>
			  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
				<div class="ps-owl-actions"><a class="ps-prev" href="#"><i class="ps-icon-arrow-right"></i>Prev</a><a class="ps-next" href="#">Next<i class="ps-icon-arrow-left"></i></a></div>
			  </div>
		</div>
	  </div>
	  <div class="ps-section__content">
		<div class="ps-owl--colection owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="30" data-owl-nav="false" data-owl-dots="false" data-owl-item="4" data-owl-item-xs="1" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-duration="1000" data-owl-mousedrag="on">
			<div class="grid-item kids">
				<div class="grid-item__content-wrapper">
					<div class="ps-shoe mb-30">
						<div class="ps-shoe__thumbnail">
							<div class="ps-badge"><span>New</span></div>
							<!--					  默认显示-->
							<div class="ps-badge ps-badge--sale ps-badge--2nd"><span>-35%</span></div><a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="images/shoe/1.jpg" alt=""><a class="ps-shoe__overlay" href="product-detail.php"></a>
						</div>
						<div class="ps-shoe__content">
							<div class="ps-shoe__variants">
								<!--						预览图-->
								<div class="ps-shoe__variant normal"><img src="images/shoe/2.jpg" alt=""><img src="images/shoe/3.jpg" alt=""><img src="images/shoe/4.jpg" alt=""><img src="images/shoe/5.jpg" alt=""></div>
								<select class="ps-rating ps-shoe__rating">
									<option value="1">1</option>
									<option value="1">2</option>
									<option value="1">3</option>
									<option value="1">4</option>
									<option value="2">5</option>
								</select>
							</div>
							<div class="ps-shoe__detail"><a class="ps-shoe__name" href="#">学习资料测试</a>
								<p class="ps-shoe__categories"><a href="#">类</a>,<a href="#"> 品牌</a>,<a href="#"> 品牌</a></p><span class="ps-shoe__price"> ￥ 120</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="grid-item nike">
				<div class="grid-item__content-wrapper">
					<div class="ps-shoe mb-30">
						<div class="ps-shoe__thumbnail"><a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="images/shoe/2.jpg" alt=""><a class="ps-shoe__overlay" href="product-detail.php"></a>
						</div>
						<div class="ps-shoe__content">
							<div class="ps-shoe__variants">
								<div class="ps-shoe__variant normal"><img src="images/shoe/2.jpg" alt=""><img src="images/shoe/3.jpg" alt=""><img src="images/shoe/4.jpg" alt=""><img src="images/shoe/5.jpg" alt=""></div>
								<select class="ps-rating ps-shoe__rating">
									<option value="1">1</option>
									<option value="1">2</option>
									<option value="1">3</option>
									<option value="1">4</option>
									<option value="2">5</option>
								</select>
							</div>
							<div class="ps-shoe__detail"><a class="ps-shoe__name" href="#">手机数码</a>
								<p class="ps-shoe__categories"><a href="#">类</a>,<a href="#"> 品牌</a>,<a href="#"> 品牌</a></p><span class="ps-shoe__price"> ￥ 120</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="grid-item adidas">
				<div class="grid-item__content-wrapper">
					<div class="ps-shoe mb-30">
						<div class="ps-shoe__thumbnail"><a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="images/shoe/3.jpg" alt=""><a class="ps-shoe__overlay" href="product-detail.php"></a>
						</div>
						<div class="ps-shoe__content">
							<div class="ps-shoe__variants">
								<div class="ps-shoe__variant normal"><img src="images/shoe/2.jpg" alt=""><img src="images/shoe/3.jpg" alt=""><img src="images/shoe/4.jpg" alt=""><img src="images/shoe/5.jpg" alt=""></div>
								<select class="ps-rating ps-shoe__rating">
									<option value="1">1</option>
									<option value="1">2</option>
									<option value="1">3</option>
									<option value="1">4</option>
									<option value="2">5</option>
								</select>
							</div>
							<div class="ps-shoe__detail"><a class="ps-shoe__name" href="#">服饰美妆</a>
								<p class="ps-shoe__categories"><a href="#">测试</a>,<a href="#"> 测试</a>,<a href="#"> 测试</a></p><span class="ps-shoe__price"> ￥ 120</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="grid-item kids">
				<div class="grid-item__content-wrapper">
					<div class="ps-shoe mb-30">
						<div class="ps-shoe__thumbnail">
							<div class="ps-badge ps-badge--sale"><span>-35%</span></div><a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="images/shoe/4.jpg" alt=""><a class="ps-shoe__overlay" href="product-detail.php"></a>
						</div>
						<div class="ps-shoe__content">
							<div class="ps-shoe__variants">
								<div class="ps-shoe__variant normal"><img src="images/shoe/2.jpg" alt=""><img src="images/shoe/3.jpg" alt=""><img src="images/shoe/4.jpg" alt=""><img src="images/shoe/5.jpg" alt=""></div>
								<select class="ps-rating ps-shoe__rating">
									<option value="1">1</option>
									<option value="1">2</option>
									<option value="1">3</option>
									<option value="1">4</option>
									<option value="2">5</option>
								</select>
							</div>
							<div class="ps-shoe__detail"><a class="ps-shoe__name" href="#">学习资料测试</a>
								<p class="ps-shoe__categories"><a href="#">类</a>,<a href="#"> 品牌</a>,<a href="#"> 品牌</a></p><span class="ps-shoe__price"> ￥ 120</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="grid-item men">
				<div class="grid-item__content-wrapper">
					<div class="ps-shoe mb-30">
						<div class="ps-shoe__thumbnail"><a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="images/shoe/5.jpg" alt=""><a class="ps-shoe__overlay" href="product-detail.php"></a>
						</div>
						<div class="ps-shoe__content">
							<div class="ps-shoe__variants">
								<div class="ps-shoe__variant normal"><img src="images/shoe/2.jpg" alt=""><img src="images/shoe/3.jpg" alt=""><img src="images/shoe/4.jpg" alt=""><img src="images/shoe/5.jpg" alt=""></div>
								<select class="ps-rating ps-shoe__rating">
									<option value="1">1</option>
									<option value="1">2</option>
									<option value="1">3</option>
									<option value="1">4</option>
									<option value="2">5</option>
								</select>
							</div>
							<div class="ps-shoe__detail"><a class="ps-shoe__name" href="#">户外运动</a>
								<p class="ps-shoe__categories"><a href="#">类</a>,<a href="#"> Nike</a>,<a href="#"> Jordan</a></p><span class="ps-shoe__price"> ￥ 120</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="grid-item women">
				<div class="grid-item__content-wrapper">
					<div class="ps-shoe mb-30">
						<div class="ps-shoe__thumbnail"><a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a><img src="images/shoe/6.jpg" alt=""><a class="ps-shoe__overlay" href="product-detail.php"></a>
						</div>
						<div class="ps-shoe__content">
							<div class="ps-shoe__variants">
								<div class="ps-shoe__variant normal"><img src="images/shoe/2.jpg" alt=""><img src="images/shoe/3.jpg" alt=""><img src="images/shoe/4.jpg" alt=""><img src="images/shoe/5.jpg" alt=""></div>
								<select class="ps-rating ps-shoe__rating">
									<option value="1">1</option>
									<option value="1">2</option>
									<option value="1">3</option>
									<option value="1">4</option>
									<option value="2">5</option>
								</select>
							</div>
							<div class="ps-shoe__detail"><a class="ps-shoe__name" href="#">生活百货</a>
								<p class="ps-shoe__categories"><a href="#">测试</a>,<a href="#"> 测试</a>,<a href="#"> Jordan</a></p><span class="ps-shoe__price"> ￥ 120</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	  </div>
	</div>
  </div>

</main>
<script>
//goodsid没有传到php
    function add_cart(id) {
        var goods_id=id;
        // $.ajax({
        //     type:'post',
        //     url:'addcart.php',
        //     data() {
        //         goodsid:"goods_id"
        //     },
        //     success:function () {{
        //         alert('success');
        //     }
        //     }
        // });
        window.location.href='addcart.php?no='+goods_id';
    }
</script>
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
<!-- Custom scripts-->
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
