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
}/*
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

}*/

// Numero de productos relacionados
add_filter( 'woocommerce_output_related_products_args', 'themename_related_products_count' );

function themename_related_products_count( $args ) {
     $args['posts_per_page'] = 12;
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

// Remove WooCommerce Updater
remove_action('admin_notices', 'woothemes_updater_notice');

/**
 * Code goes in functions.php or a custom plugin. Replace XX with the country code your changing.
 */
add_filter( 'woocommerce_states', 'custom_woocommerce_states' );

function custom_woocommerce_states( $states ) {

  $states['VE'] = array(
    'AM' => 'Amazonas',
    'AN' => 'Anzoátegui',
    'AP' => 'Apure',
    'AR' => 'Aragua',
    'BA' => 'Barinas',
    'CA' => 'Carabobo',
    'CO' => 'Cojedes',
    'DA' => 'Delta Amacuro',
    'DC' => 'Distrito Capital',
    'FA' => 'Falcón',
    'GU' => 'Guárico',
    'LA' => 'Lara',
    'ME' => 'Mérida',
    'MI' => 'Miranda',
    'MO' => 'Monagas',
    'NE' => 'Nueva Esparta',
    'PO' => 'Portuguesa',
    'SU' => 'Sucre',
    'TA' => 'Táchira',
    'TR' => 'Trujillo',
    'VA' => 'Vargas',
    'YA' => 'Yaracuy',
    'ZU' => 'Zulia'
  );

  return $states;
}
/*add_filter( 'wc_city_select_cities', 'my_cities' );
function my_cities( $cities ) {
    $cities['AM'] = array(
        'AM' => array(
            'Barquisimeto',
            'Cabudare'
        ),
        'AN' => array(
            'City' ,
            'City'
        )
);
return $cities;
}*/
add_filter( 'woocommerce_default_address_fields' , 'custom_override_default_postcode_field' );
function custom_override_default_postcode_field( $address_fields ) {
    // Your postcodes array
    $postcode_array = array(
        'opt1' => "001122",
        'opt2' => "112200",
        'opt3' => "334400"
    );
    $address_fields['postcode']['type'] = 'select';
    $address_fields['postcode']['options'] = $postcode_array;

    return $address_fields;
}
add_filter( 'woocommerce_checkout_fields' , 'bbloomer_remove_billing_postcode_checkout' );

function bbloomer_remove_billing_postcode_checkout( $fields ) {
  unset($fields['billing']['billing_postcode']);
  return $fields;
}
/**
 * Add store location select dropdown in checkout page
 **/
add_filter( 'woocommerce_checkout_fields' , 'custom_store_pickup_field');

function custom_store_pickup_field( $fields ) {
      $fields['shipping']['store_pickup'] = array(

          'type'     => 'select',
          'options'  => array(
              'option_1' => 'Option 1 text',
              'option_2' => 'Option 2 text',
              'option_3' => 'Option 2 text'
          ),
          'label'     => __('Store Pick Up Location', 'woocommerce'),
          'required'  => false,
          'class'     => array('store-pickup form-row-wide'),
          'clear'     => true
      );

     return $fields;
}
/**
 * Update the order meta with store location pickup value
 **/
add_action( 'woocommerce_checkout_update_order_meta', 'store_pickup_field_update_order_meta' );
function store_pickup_field_update_order_meta( $order_id ) {
    if ( $_POST[ 'store_pickup' ] )
        update_post_meta( $order_id, 'pickUpLocation', esc_attr( $_POST[ 'store_pickup' ] ) );
}
/**
 * Add the field to order emails
 **/
add_filter('woocommerce_email_order_meta_keys', 'my_woocommerce_email_order_meta_keys');

function my_woocommerce_email_order_meta_keys( $keys ) {
    $keys['envio a'] = 'pickUpLocation';
    return $keys;
}

// removes (free) from free shipping methods

add_filter( 'woocommerce_cart_shipping_method_full_label', 'remove_free_label', 10, 2 );

function remove_free_label($full_label, $method) {
$full_label = str_replace("(Free)","",$full_label);
return $full_label;
}
