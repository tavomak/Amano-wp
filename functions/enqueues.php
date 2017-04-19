<?php

/*
Google CDN jQuery with a local fallback
=======================================
See http://www.wpcoke.com/load-jquery-from-cdn-with-local-fallback-for-wordpress/
*/

if( !is_admin()){
	$url = 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js';
	$test_url = @fopen($url,'r');
	if($test_url !== false) {
		function load_external_jQuery() {
			wp_deregister_script('jquery');
			wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js');
			wp_enqueue_script('jquery');
		}
		add_action('wp_enqueue_scripts', 'load_external_jQuery');
	} else {
		function load_local_jQuery() {
			wp_deregister_script('jquery');
			wp_register_script('jquery', get_bloginfo('template_url').'/js/jquery-2.2.4.min.js', __FILE__, false, '2.2.4', true);
			wp_enqueue_script('jquery');
		}
		add_action('wp_enqueue_scripts', 'load_local_jQuery');
	}
}

function cam_wp_enqueues() {

/*
OPTIONAL: Enqueue WordPress's onboard jQuery
============================================
Un-comment the next two lines of code if you want to use WordPress's onboard jQuery INSTEAD of the Google CDN jQuery above.
	wp_register_script('jquery', get_bloginfo('template_url').'/js/jquery-1.11.3.min.js', __FILE__, false, '1.11.3', true);
	wp_enqueue_script( 'jquery' );
*/

	wp_register_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', false, '3.3.4', null);
  	wp_register_style('cam-wp-css', get_template_directory_uri() . '/assets/css/style-dist.css', false, null);
	wp_enqueue_style('bootstrap-css');
	wp_enqueue_style('cam-wp-css');


  	wp_register_script('modernizr', get_template_directory_uri() . '/assets/js/modernizr-2.8.3.min.js', false, null, false);
  	wp_register_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', false, null, true);
	wp_register_script('cam-wp-js', get_template_directory_uri() . '/assets/js/main-dist.js', false, null, true);

	wp_enqueue_script('bootstrap-js');
	wp_enqueue_script('modernizr');
	wp_enqueue_script('cam-wp-js');

    if ( class_exists( 'WooCommerce' ) ) {
    // Si woocommerce exsiste cargar estilos
        if (is_woocommerce()) {
            wp_register_style('woomm', get_template_directory_uri() . '/assets/css/woocommerce-dist.css', false, null);
            wp_enqueue_style('woomm');
        }
    }

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'cam_wp_enqueues', 100);
