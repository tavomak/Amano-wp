<?php
//Agregar Estados de Venezuela
function custom_woocommerce_states( $states ) {
  $states['VE'] = array(
    'Amazonas' => 'Amazonas',
    'Anzoátegui' => 'Anzoátegui',
    'Apure' => 'Apure',
    'Aragua' => 'Aragua',
    'Barinas' => 'Barinas',
    'Carabobo' => 'Carabobo',
    'Cojedes' => 'Cojedes',
    'Delta Amacuro' => 'Delta Amacuro',
    'Distrito Capital' => 'Distrito Capital',
    'Falcón' => 'Falcón',
    'Guárico' => 'Guárico',
    'Lara' => 'Lara',
    'Mérida' => 'Mérida',
    'Miranda' => 'Miranda',
    'Monagas' => 'Monagas',
    'Nueva Esparta' => 'Nueva Esparta',
    'Portuguesa' => 'Portuguesa',
    'Sucre' => 'Sucre',
    'Táchira' => 'Táchira',
    'Trujillo' => 'Trujillo',
    'Vargas' => 'Vargas',
    'Yaracuy' => 'Yaracuy',
    'Zulia' => 'Zulia'
  );
  return $states;
}
add_filter( 'woocommerce_states', 'custom_woocommerce_states' );

//Crear campo para Ciudad
function custom_city_field( $city_fields ) {


    $city_fields['shipping']['shipping_city'] =  array(
        'type'     => 'select',
        'options'  => array('Seleccionar ciudad' =>'Seleccionar ciudad'),
        'label'     => __('Ciudad', 'woocommerce'),
        'required'  => true,
        'class'     => array("cb")
    );

    $city_fields['shipping']['shipping_agency'] = array(
        'type'     => 'select',
        'options'  => array('Seleccionar agencia' => 'Seleccionar agencia'),
        'label'     => __('Agencia Zoom', 'woocommerce'),
        'required'  => false,
        'class'     => array('store-pickup form-row-wide'),
        'clear'     => true
    );
        
    return $city_fields;
}
add_filter( 'woocommerce_checkout_fields' , 'custom_city_field');

//Update the order meta with store location pickup value
add_action( 'woocommerce_checkout_update_order_meta', 'my_custom_checkout_field_update_order_meta' );

function my_custom_checkout_field_update_order_meta( $order_id ) {
    if ( ! empty( $_POST['shipping_city'] ) ) {
        update_post_meta( $order_id, 'Ciudad', sanitize_text_field( $_POST['shipping_city'] ) );
    }
    if ( ! empty( $_POST['shipping_agency'] ) ) {
        update_post_meta( $order_id, 'Agencia Zoom', sanitize_text_field( $_POST['shipping_agency'] ) );
    }
}

// Add the field to order emails
function my_woocommerce_email_order_meta_keys( $keys ) {
    echo '<h3>Envio ZOOM a:</h3>';
    $keys['Ciudad'] = 'Ciudad';
    $keys['Agencia'] = 'Agencia Zoom';
    return $keys;
}
add_filter('woocommerce_email_order_meta_keys', 'my_woocommerce_email_order_meta_keys');