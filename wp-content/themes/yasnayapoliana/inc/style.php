<?php

// <link href="css/style.css" rel="stylesheet" type="text/css" media="all">
// <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" property="" />
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="all">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">

<link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
<link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">

<link rel="stylesheet" href="magnific-popup/dist/magnific-popup.css">
<!-- slick css  -->
<link href="slick/slick.css" rel="stylesheet" type="text/css" media="all">
<link href="slick/slick-theme.css" rel="stylesheet" type="text/css" media="all">



function mriya_style() {
	wp_enqueue_style( 'mriya-style', get_stylesheet_uri() );

	// wp_enqueue_style( 'fonts1', 'http://fonts.googleapis.com/css?family=Raleway:400,700,600,500,300');
	// wp_enqueue_style( 'fonts2', 'http://fonts.googleapis.com/css?family=Oswald:400,700,300');
	// wp_enqueue_style( 'fonts3', 'http://fonts.googleapis.com/css?family=Oswald:400,700,300');
	wp_enqueue_style( 'mystyle', get_template_directory_uri() . '/assets/css/style.css');

	wp_enqueue_style( 'flexslider', get_template_directory_uri() . '/assets/css/flexslider.css');

	wp_enqueue_style( 'themeElements', get_template_directory_uri() . '/assets/css/theme-elements.css');
	wp_enqueue_style( 'plugins', get_template_directory_uri() . '/assets/css/plugins.css');
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/vendor/slick/slick.css');
	wp_enqueue_style( 'slickTheme', get_template_directory_uri() . '/assets/vendor/slick/slick-theme.css');
	wp_enqueue_style( 'fontAwesome', get_template_directory_uri() . '/assets/fonts/font-awesome.min.css');
	wp_enqueue_style( 'skeleton', get_template_directory_uri() . '/assets/css/skeleton.css');
	wp_enqueue_style( 'flexslider', get_template_directory_uri() . '/assets/vendor/flexslider/flexslider.css');
	wp_enqueue_style( 'isotope', get_template_directory_uri() . '/assets/vendor/isotope/isotope.css');
	wp_enqueue_style( 'carousel', get_template_directory_uri() . '/assets/vendor/owl/owl.carousel.css');
	wp_enqueue_style( 'prettyPhoto', get_template_directory_uri() . '/assets/vendor/prettyPhoto/prettyPhoto.css');
	wp_enqueue_style( 'settings', get_template_directory_uri() . '/assets/vendor/rs-plugin/css/settings.css');
	wp_enqueue_style( 'themeResponsive', get_template_directory_uri() . '/assets/css/theme-responsive.css');
}
add_action( 'wp_enqueue_scripts', 'mriya_style' );
