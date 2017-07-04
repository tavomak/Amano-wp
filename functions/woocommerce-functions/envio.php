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

//Agregar Estados de Venezuela
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
add_filter( 'woocommerce_states', 'custom_woocommerce_states' );

/*
Reordenar Campos en el checkout
 */
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
    $fields['shipping']['shipping_city']['placeholder'] = 'Ciudad';
    $fields['shipping']['shipping_city']['label'] = 'Ciudad';
    $fields['billing']['billing_city']['placeholder'] = 'Ciudad';
    $fields['billing']['billing_city']['label'] = 'Ciudad';
    return $fields;
}
add_filter( 'woocommerce_checkout_fields' , 'reorder_checkout' );

/*
Crear campo para Ciudad

function custom_city_field( $fields ) {
    $estado = WC()->customer->get_shipping_state();
    switch ($estado) {
        case (AM):
            $opciones = array(
              'option_1' => 'AM1',
              'option_2' => 'AM2',
              'option_5' => 'AM3',
              'option_3' => $estado,
              'option_4' => 'AM4'
          );
            break;
    }

    $fields['billing']['billing_city']['type'] = 'select';
    $fields['billing']['billing_city']['options'] = $opciones;

    $fields['shipping']['shipping_city']['type'] = 'select';
    $fields['shipping']['shipping_city']['options'] = $opciones;

    //foreach($estado as $ciudad){}
        switch ($ciudad) {
            case (AM1):
                $agencia = array(
                  'option_1' => 'agencia AM1',
                  'option_2' => 'agencia AM2',
                  'option_3' => 'agencia AM3',
                  'option_4' => 'agencia AM4'
              );
                break;case (AM2):
                $agencia = array(
                  'option_1' => 'agencia AM1',
                  'option_2' => 'agencia AM2',
                  'option_3' => 'agencia AM3',
                  'option_4' => 'agencia AM4'
              );
                break;case (AM3):
                $agencia = array(
                  'option_1' => 'agencia AM1',
                  'option_2' => 'agencia AM2',
                  'option_3' => 'agencia AM3',
                  'option_4' => 'agencia AM4'
              );
                break;case (AM4):
                $agencia = array(
                  'option_1' => 'agencia AM1',
                  'option_2' => 'agencia AM2',
                  'option_3' => 'agencia AM3',
                  'option_4' => 'agencia AM4'
              );
                break;
        }

    $fields['shipping']['zoom_pickup'] = array(
        'type'     => 'select',
        'options'  => $agencia,
        'label'     => __('Agencia Zoom', 'woocommerce'),
        'required'  => false,
        'class'     => array('store-pickup form-row-wide'),
        'clear'     => true
    );

    return $fields;
}
add_filter( 'woocommerce_checkout_fields' , 'custom_city_field');*/

/**
Update the order meta with store location pickup value
**/
function store_pickup_field_update_order_meta( $order_id ) {
    if ( $_POST[ 'zoom_pickup' ] )
        update_post_meta( $order_id, 'pickUpLocation', esc_attr( $_POST[ 'zoom_pickup' ] ) );
}
add_action( 'woocommerce_checkout_update_order_meta', 'store_pickup_field_update_order_meta' );

/**
 * Add the field to order emails
 **/

function my_woocommerce_email_order_meta_keys( $keys ) {
    $keys['Enviar a'] = 'pickUpLocation';
    return $keys;
}
add_filter('woocommerce_email_order_meta_keys', 'my_woocommerce_email_order_meta_keys');

?>