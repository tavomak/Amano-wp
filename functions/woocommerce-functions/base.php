<?php
// Productos por fila
function loop_columns() {
return 6;
}
add_filter('loop_shop_columns', 'loop_columns', 999);
// productis por pagina
if (wp_is_mobile()){
  add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 12;' ), 20 );
}else{
  add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 24;' ), 20 );
}

//Remover tablas
add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );

function woo_remove_product_tabs( $tabs ) {

    unset( $tabs['description'] );      	// Remove the description tab
    unset( $tabs['reviews'] ); 			// Remove the reviews tab
    unset( $tabs['additional_information'] );  	// Remove the additional information tab

    return $tabs;
}

// Numero de productos relacionados
add_filter( 'woocommerce_output_related_products_args', 'themename_related_products_count' );

function themename_related_products_count( $args ) {
     $args['posts_per_page'] = 12;
     $args['columns'] = 6;

     return $args;
}

//insertar widget horizontal
function prefix_add_my_widget() {
 echo '<div class="woo-horizontal-filter">';
 dynamic_sidebar( 'woo-horizontal-widget-area' );
 echo '</div>';
}
add_action( 'woocommerce_before_shop_loop', 'prefix_add_my_widget'  );

//Ocultar editor de texto de wordpress en las entradas de productos
function remove_product_editor() {
  remove_post_type_support( 'product', 'editor' );
}
add_action( 'init', 'remove_product_editor' );

// Remueve WooCommerce Updater notificacion
remove_action('admin_notices', 'woothemes_updater_notice');

//Change the symbol of an existing currency
add_filter('woocommerce_currency_symbol', 'change_existing_currency_symbol', 10, 2);
function change_existing_currency_symbol( $currency_symbol, $currency ) {
     switch( $currency ) {
          case 'VEF': $currency_symbol = 'Bs.'; break;
     }
     return $currency_symbol;
}

// Use WC 2.0 variable price format, now include sale price strikeout
add_filter( 'woocommerce_variable_sale_price_html', 'wc_wc20_variation_price_format', 10, 2 );
add_filter( 'woocommerce_variable_price_html', 'wc_wc20_variation_price_format', 10, 2 );
function wc_wc20_variation_price_format( $price, $product ) {
	// Main Price
	$prices = array( $product->get_variation_price( 'min', true ), $product->get_variation_price( 'max', true ) );
	$price = $prices[0] !== $prices[1] ? sprintf( __( '%1$s', 'woocommerce' ), wc_price( $prices[0] ) ) : wc_price( $prices[0] );
	// Sale Price
	$prices = array( $product->get_variation_regular_price( 'min', true ), $product->get_variation_regular_price( 'max', true ) );
	sort( $prices );
	$saleprice = $prices[0] !== $prices[1] ? sprintf( __( '%1$s', 'woocommerce' ), wc_price( $prices[0] ) ) : wc_price( $prices[0] );
 
	if ( $price !== $saleprice ) {
		$price = '<del><span class="price-title">Precio Regular</span> ' . $saleprice . '</del> <ins><span class="price-title">Oferta</span>' . $price . '</ins>';
	}
	return $price;
}