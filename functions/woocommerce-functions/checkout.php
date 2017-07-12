<?php
//Cambiar Texto de opcion de envio
function wc_shipping_field_strings( $translated_text, $text, $domain ) {
    switch ( $translated_text ) {
        case '¿Enviar a una dirección diferente?' :
            $translated_text = __( 'Enviar a agencia Zoom', 'woocommerce' );
        break;
    }
    return $translated_text;
}
add_filter( 'gettext', 'wc_shipping_field_strings', 20, 3 );

//Reordenar Campos en el checkout
function reorder_checkout( $fields ) {

    unset($fields['billing']['billing_company']);
    unset($fields['billing']['billing_postcode']);
    unset($fields['billing']['billing_country']);
    unset($fields['billing']['billing_address_2']);
    unset($fields['shipping']['shipping_company']);
    unset($fields['shipping']['shipping_address_1']);
    unset($fields['shipping']['shipping_address_2']);
    unset($fields['shipping']['shipping_country']);
    unset($fields['shipping']['shipping_postcode']);

    $fields['billing']['billing_address_1']['type'] = 'textarea';

    //Cambiar titulo de estado
    $fields['shipping']['shipping_state']['placeholder'] = 'Estado';
    $fields['shipping']['shipping_state']['label'] = 'Estado';

    $fields['billing']['billing_state']['placeholder'] = 'Estado';
    $fields['billing']['billing_state']['label'] = 'Estado';

    //Cambiar Titulo de ciudad

    $fields['billing']['billing_city']['placeholder'] = 'Ciudad';
    $fields['billing']['billing_city']['label'] = 'Ciudad';

    //Reordenar Billing
    $fields2['billing']['billing_first_name'] = $fields['billing']['billing_first_name'];
    $fields2['billing']['billing_last_name']  = $fields['billing']['billing_last_name'];
    $fields2['billing']['billing_email']      = $fields['billing']['billing_email'];
    $fields2['billing']['billing_phone']      = $fields['billing']['billing_phone'];
    $fields2['billing']['billing_state']      = $fields['billing']['billing_state'];
    $fields2['billing']['billing_city']       = $fields['billing']['billing_city'];
    $fields2['billing']['billing_address_1']  = $fields['billing']['billing_address_1'];

    // Reordenar Shipping 
    $fields2['shipping']['shipping_first_name'] = $fields['shipping']['shipping_first_name'];
    $fields2['shipping']['shipping_last_name']  = $fields['shipping']['shipping_last_name'];
    $fields2['shipping']['shipping_state']      = $fields['shipping']['shipping_state'];
    $fields2['shipping']['shipping_city']       = $fields['shipping']['shipping_city'];
    $fields2['shipping']['shipping_agency']     = $fields['shipping']['shipping_agency'];
	
  $checkout_fields = array_merge( $fields, $fields2);
  return $checkout_fields;
}
add_filter( 'woocommerce_checkout_fields' , 'reorder_checkout' );