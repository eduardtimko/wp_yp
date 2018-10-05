<!DOCTYPE html>
<html lang="ru">
<head>
<title><?php wp_title(''); ?></title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Real Property Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--// Meta tag Keywords -->
<!-- css files -->
<?php wp_head(); ?>
<!-- end slick css  -->
<!-- //css files -->


</head>
<body <?php body_class(); ?>>
<!-- header -->
	<div class="header" id="home">
		<div class="container">
			<div class="logo">
				<h1><a href="index.html"><i><img src="images/logo.png" alt="" /></i>Ясная поляна</a></h1>
			</div>

			<div class="header-left">
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">

					<!-- 	<div class="header-right-search">
							<form action="#" method="post">
								<input type="search" placeholder="Search" required="" />
								<input type="submit" value=" ">
							</form>
						</div> -->

						<nav class="link-effect-9" id="link-effect-9">
							<!-- <ul class="nav navbar-nav">
								<li><a href="#about" class="hvr-overline-from-center scroll">О поселке </a></li>
								<li><a href="#team" class="hvr-overline-from-center scroll">Коттеджи</a></li>
								<li><a href="#properties" class="hvr-overline-from-center scroll">Галлерея</a></li>
								<li><a href="#blogs" class="hvr-overline-from-center scroll">Рассрочка</a></li>
								<li><a href="#contact" class="hvr-overline-from-center scroll">Контакты</a></li>
							</ul> -->


              <?php
                                    wp_nav_menu(array(
              'menu'            => 'primary',
              'container'       => 'ul',
              'menu_class'      => 'nav navbar-nav',
              'menu_id'         => 'topMenu',
              'echo'            => true,
              'fallback_cb'     => 'wp_page_menu',
              'before'          => '',
              'after'           => '',
              'link_before'     => '',
              'link_after'      => '',
              'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
              'depth'           => '',
              'walker'          => '',

                                      ));
                                   ?>


						</nav>
					</div>
					<!-- /.navbar-collapse -->
				</nav>
			</div>
		</div>
	</div>
<!-- //header -->
