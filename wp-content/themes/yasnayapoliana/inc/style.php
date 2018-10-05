<?php

function yp_style() {
	wp_enqueue_style( 'mriya-style', get_stylesheet_uri() );


	wp_enqueue_style( 'mystyle', get_template_directory_uri() . '/assets/css/style.css');

	wp_enqueue_style( 'flexslider', get_template_directory_uri() . '/assets/css/flexslider.css');

	wp_enqueue_style( 'easyResponsiveTabs', get_template_directory_uri() . '/assets/css/easy-responsive-tabs.css');

	wp_enqueue_style( 'chocolat', get_template_directory_uri() . '/assets/css/chocolat.css');

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');

	wp_enqueue_style( 'fontAwesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css');

	wp_enqueue_style( 'owlcarousel', get_template_directory_uri() . '/assets/owlcarousel/owl.carousel.min.css');

	wp_enqueue_style( 'themeDefault', get_template_directory_uri() . '/assets/owlcarousel/owl.theme.default.min.css');

	wp_enqueue_style( 'magnificPopup', get_template_directory_uri() . '/assets/magnific-popup/dist/magnific-popup.css');

	wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/slick/slick.css');

	wp_enqueue_style( 'slickTheme', get_template_directory_uri() . '/assets/slick/slick-theme.css');

}
add_action( 'wp_enqueue_scripts', 'yp_style' );
