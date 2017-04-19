<?php
// WooCommerce functions
if ( ! function_exists( 'cam_wp_woocommerce_setup' ) ) :
  function cam_wp_woocommerce_setup() {
    add_theme_support( 'woocommerce' );
  }
endif;
add_action( 'after_setup_theme', 'cam_wp_woocommerce_setup' );
/*
Set Default Thumbnail Sizes for WooCommerce Product Pages, on Theme Activation
*/
global $pagenow;
if ( is_admin() && isset( $_GET['activated'] ) && $pagenow == 'themes.php' ) add_action( 'init', 'cam_wp_woocommerce_image_dimensions', 1 );
/*
Define image sizes
*/
function cam_wp_woocommerce_image_dimensions() {
  $catalog = array(
		'width' 	=> '350',	// px
		'height'	=> '453',	// px
		'crop'		=> 1 		// true
	);
	$single = array(
		'width' 	=> '570',	// px
		'height'	=> '708',	// px
		'crop'		=> 1 		// true
	);
	$thumbnail = array(
		'width' 	=> '350',	// px
		'height'	=> '453',	// px
		'crop'		=> 0 		// false
	);
	// Image sizes
	update_option( 'shop_catalog_image_size', $catalog ); 		// Product category thumbs
	update_option( 'shop_single_image_size', $single ); 		// Single product image
	update_option( 'shop_thumbnail_image_size', $thumbnail ); 	// Image gallery thumbs
}
/*
 * Add basic WooCommerce template support
 *
 */
// Remove original WooCommerce wrappers
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
// Add New wrappers
add_action('woocommerce_before_main_content', 'cam_wp_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'cam_wp_wrapper_end', 10);
function reinnervate_wrapper_start() {
  echo '<main id="main" class="site-main" role="main">';
}
function cam_wp_wrapper_end() {
  echo '</main>';
}


// Productos por fila
function loop_columns() {
return 6;
}
add_filter('loop_shop_columns', 'loop_columns', 999);
// productis por pagina
add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 24;' ), 20 );
/*
Remover tablas
*/
add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );

function woo_remove_product_tabs( $tabs ) {

    unset( $tabs['description'] );      	// Remove the description tab
    unset( $tabs['reviews'] ); 			// Remove the reviews tab
    unset( $tabs['additional_information'] );  	// Remove the additional information tab

    return $tabs;
}
//Ajaxfi cart
add_filter('add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment');

function woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;

	ob_start();

    $cartUrl = wc_get_cart_url();
    $cart_contents_count = WC()->cart->get_cart_contents_count();

	?>
	<?php
    echo '<a class="cart-cuenta" href="'.$cartUrl.'">';
    echo '<span class="numero-cuenta">'.sprintf ( _n( '%d', '%d', $cart_contents_count ), $cart_contents_count ).'</span>';
    echo ' ';
    echo WC()->cart->get_cart_total();
    echo '</a>';
    ?>
	<?php

	$fragments['a.cart-cuenta'] = ob_get_clean();

	return $fragments;

}

// Numero de productos relacionados
add_filter( 'woocommerce_output_related_products_args', 'themename_related_products_count' );

function themename_related_products_count( $args ) {
     $args['posts_per_page'] = 6;
     $args['columns'] = 6;

     return $args;
}

//insertar widget horizontal
function prefix_add_my_widget() {
 echo '<div id="my-sidebar" class="">';
 dynamic_sidebar( 'woo-horizontal-widget-area' );
 echo '</div>';
}
add_action( 'woocommerce_before_shop_loop', 'prefix_add_my_widget'  );
//Ocultar editor de texto de wordpress
function remove_product_editor() {
  remove_post_type_support( 'product', 'editor' );
}
add_action( 'init', 'remove_product_editor' );
