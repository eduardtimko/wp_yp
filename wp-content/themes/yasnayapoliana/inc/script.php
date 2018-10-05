<?php
function wp_yp_scripts() {
  wp_enqueue_script( 'jquery');
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap-3.1.1.min.js',array( ), '', true  );
	wp_enqueue_script( 'magnific-popup', get_template_directory_uri().'/assets/magnific-popup/dist/jquery.magnific-popup.js',array(), '', true   );
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/slick/slick.js',array(  ), '', true  );
	wp_enqueue_script( 'js', get_template_directory_uri() . '/assets/js/myscript.js',array(  ), '', true  );
	wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/assets/js/jquery.flexslider.js',array(  ), '', true  );
	wp_enqueue_script( 'move-top', get_template_directory_uri() . '/assets/js/move-top.js',array(  ), '', true  );
	wp_enqueue_script( 'easing', get_template_directory_uri() . '/assets/js/easing.js',array(  ), '', true  );
	wp_enqueue_script( 'easy-responsive-tabs', get_template_directory_uri() . '/assets/js/easy-responsive-tabs.js',array(  ), '', true  );
	wp_enqueue_script( 'flexisel', get_template_directory_uri() . '/assets/js/jquery.flexisel.js',array(  ), '', true  );
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/assets/js/modernizr.custom.97074.js',array(  ), '', true  );
	wp_enqueue_script( 'chocolat', get_template_directory_uri() . '/assets/js/jquery.chocolat.js',array(  ), '', true  );
}

add_action( 'wp_enqueue_scripts', 'wp_yp_scripts' );

?>
