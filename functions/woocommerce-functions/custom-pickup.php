<?php
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

//Crear campo para Ciudad
function custom_city_field( $city_fields ) {
    
    $estados = WC()->customer->get_shipping_state();
    $agency = WC()->customer->get_shipping_city();
    
    $estado['DC'] = array(
        'CARACAS' => array(
            'ZOOM C.C. GALERIAS EL PARAISO',
            'ZOOM TAQUILLA DIA DIA UNICENTRO EL MARQUES',
            'ZOOM TAQUILLA MAKRO LA YAGUARA' 
            )
    );
    $estado['LA'] = array(
        'BARQUSIMETO' => array(
            'ZOOM BARQUISIMETO',
            'ZOOM AEROPUERTO JACINTO LARA',
            'ALIADO ZOOM EXIMCOM 101, C.A'
            ),
        'CABUDARE' => array(
            'ZOOM CABUDARE'
            ),
        'CARORA' => array(
            'ZOOM CARORA'
            ),
        'EL TOCUYO' => array(
            'ALIADO ZOOM DISTRIBUIDORA DEL SUR 83, C.A.'
            )
    );
    $datos = array();
    $datos1 = array();
foreach($estado["$estados"] as $ciudad=>$agencia){
    $datos[] = $ciudad;
    $datos1[] = $agencia;
    foreach ($agencia as $direccion){
        $datos2[]= $direccion;
    }
    
}
if ( !empty( $estados ) ) {
    $city_fields['shipping']['shipping_city'] =  array(
        'type'     => 'select',
        'options'  => $datos,
        'label'     => 'Ciudad',
        'placeholder' => 'Ciudad',
        'required'  => true,
        'class'     => array("cb")
    );
}
if ( !empty( $datos ) ) {
    $city_fields['shipping']['shipping_agency'] = array(
        'type'     => 'select',
        'options'  => $datos1[0],
        'label'     => __("Agencia Zoom $estados", 'woocommerce'),
        'required'  => false,
        'class'     => array("store-pickup form-row-wide $agency "),
        'clear'     => true
    );
}
        
    return $city_fields;
}
add_filter( 'woocommerce_checkout_fields' , 'custom_city_field');

//Update the order meta with store location pickup value
function store_pickup_field_update_order_meta( $order_id ) {
    if ( $_POST[ 'zoom_pickup' ] )
        update_post_meta( $order_id, 'pickUpLocation', esc_attr( $_POST[ 'zoom_pickup' ] ) );
}
add_action( 'woocommerce_checkout_update_order_meta', 'store_pickup_field_update_order_meta' );

// Add the field to order emails
function my_woocommerce_email_order_meta_keys( $keys ) {
    $keys['Enviar a'] = 'pickUpLocation';
    return $keys;
}
add_filter('woocommerce_email_order_meta_keys', 'my_woocommerce_email_order_meta_keys');