
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>shop bán quần áo</title>
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/css/font-awesome.min.css" rel="stylesheet">
    <link href="public/css/prettyPhoto.css" rel="stylesheet">
    <link href="public/css/price-range.css" rel="stylesheet">
    <link href="public/css/animate.css" rel="stylesheet">
	<link href="public/css/main.css" rel="stylesheet">
	<link href="public/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="public/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> 01637426093</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> huyluu241196@gmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.php"><img src="public/images/home/logo.png"  /></a>
						</div>
						
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
	
								
								
								<li><a href="index.php?controller=cart"><i class="fa fa-shopping-cart"></i> giỏ hàng</a></li>
								<?php
                            if(!isset($_SESSION['username']))
                            {
                        ?>
								<li><a href="index.php?controller=login"><i class="fa fa-lock"></i> đăng nhập</a></li>
							<?php
                            }
                            else
                            {
           
                        ?>
                         
                            <li>
                                <a href="">
                                    admin
                                </a>
                                                
                            </li>
                            <li>
                                <a href="index.php?controller=logout">
                                    Thoát
                                </a>
                            </li>
                        </ul>
                        <?php } ?>
                        
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php" class="active">trang chủ</a></li>
								<li class="dropdown"><a href="index.php?controller=cart">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="index.php?controller=product">sản phẩm</a></li>
										 
										 
										<li><a href="index.php?controller=cart">Cart</a></li> 
										
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="index.php?controller=news">Tin tức</a>
                                  
                                </li> 
								<li><a href="404.html">lỗi 404</a></li>
								<li><a href="contact-us.html">liên hệ</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
					
						<form  method="post"  action="index.php?controller=search">
						<div class="">
							<input type="text" name="key" placeholder="Nhập từ khóa..."/>
							 <button class="fa fa-search" type="submit" id="searchsubmit"></button>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	<?php
	include "controller/controller_slide.php";
	?>
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Danh mục</h2>
						<?php
						include "controller/controller_category.php"
						?>	
						<div class="shipping text-center"><!--shipping-->
							<img src="public/images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
					
					</div>
	<?php
				if(file_exists($load_controller))
					include  $load_controller;
					?>
				</div>

				
	
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>liên hệ </h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">phone:01637426093</a></li>
								<li><a href="">Email:huyluu241196@gmail.com</a></li>
							
							</ul>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="" style="text-align: center;">Copyright © 2013 </p>
				
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9&appId=1211483268945751";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9&appId=1211483268945751";
  fjs.parentNode.insertBefore(js, fjs);

}(document, 'script', 'facebook-jssdk'));</script>
<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
    <script src="public/js/jquery.js"></script>
	<script src="public/js/bootstrap.min.js"></script>
	<script src="public/js/jquery.scrollUp.min.js"></script>
	<script src="public/js/price-range.js"></script>
    <script src="public/js/jquery.prettyPhoto.js"></script>
    <script src="public/js/main.js"></script>
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/590fd1e964f23d19a89b1259/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>
</html>