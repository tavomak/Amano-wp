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

function wc_billing_field_strings( $translated_text, $text, $domain ) {
    switch ( $translated_text ) {
        case 'Detalles de facturación' :
            echo "<h3>Facturación y envio.</h3>";
            echo "<p>Tus productos seran enviados a la dirección ingresada, si lo prefieres puedes probar el envio a taquilla Zoom.</p>";
            $translated_text = __( '', 'woocommerce' );
        break;
    }
    return $translated_text;
}
add_filter( 'gettext', 'wc_billing_field_strings', 20, 3 );
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
    $fields2['billing']['billing_cedula'] = array(
        'type'     => 'text',
        'label'     => __('Cedula', 'woocommerce'),
        'placeholder'   => _x('Cedula o RIF.', 'placeholder', 'woocommerce'),
        'required'  => true,
        'class'     => array('store-pickup form-row-wide'),
        'clear'     => true
    );
    $fields2['billing']['billing_state']      = $fields['billing']['billing_state'];
    $fields2['billing']['billing_city']       = $fields['billing']['billing_city'];
    $fields2['billing']['billing_address_1']  = $fields['billing']['billing_address_1'];

    // Reordenar Shipping 
    $fields2['shipping']['shipping_first_name'] = $fields['shipping']['shipping_first_name'];
    $fields2['shipping']['shipping_last_name']  = $fields['shipping']['shipping_last_name'];
    $fields2['shipping']['shipping_cedula'] = array(
        'type'     => 'text',
        'label'     => __('Cedula receptor', 'woocommerce'),
        'placeholder'   => _x('Cedula o RIF.', 'placeholder', 'woocommerce'),
        'required'  => true,
        'class'     => array('store-pickup form-row-wide'),
        'clear'     => true
    );
    $fields2['shipping']['shipping_state']      = $fields['shipping']['shipping_state'];
    $fields2['shipping']['shipping_city']       = $fields['shipping']['shipping_city'];
    $fields2['shipping']['shipping_agency']     = $fields['shipping']['shipping_agency'];
	
  $checkout_fields = array_merge( $fields, $fields2);
  return $checkout_fields;
}
add_filter( 'woocommerce_checkout_fields' , 'reorder_checkout' );

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
        'required'  => true,
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
    if ( ! empty( $_POST['shipping_cedula'] ) ) {
        update_post_meta( $order_id, 'Cedula receptor', sanitize_text_field( $_POST['shipping_cedula'] ) );
    }
    if ( ! empty( $_POST['billing_cedula'] ) ) {
        update_post_meta( $order_id, 'Cedula', sanitize_text_field( $_POST['billing_cedula'] ) );
    }
}

// Validar
add_action('woocommerce_checkout_process', 'check_if_selected');
function check_if_selected() {
	if ( empty( $_POST['shipping_city'] ) ) {
        wc_add_notice( 'Por favor selecciona una ciudad.', 'error' );
    }
    if ( empty( $_POST['shipping_agency'] ) ) {
        wc_add_notice( 'Por favor selecciona una agencia.', 'error' );
    }
    if ( empty( $_POST['shipping_cedula'] ) ) {
        wc_add_notice( 'Por favor Introduce tu cedula.', 'error' );
    }
    if ( empty( $_POST['billing_cedula'] ) ) {
        wc_add_notice( 'Por favor Introduce tu cedula', 'error' );
    }
}

// Agregar ordenes al email
add_filter('woocommerce_email_order_meta_keys', 'my_woocommerce_email_order_meta_keys');
function my_woocommerce_email_order_meta_keys( $keys ) {
    if ( ! empty( $_POST['shipping_city'] ) ) {
        echo '<h3>Envio ZOOM a:</h3>';
        $keys['CI.Cliente'] = 'Cedula';
        $keys['Ciudad'] = 'Ciudad';
        $keys['Agencia'] = 'Agencia Zoom';
        $keys['CI.Envio'] = 'Cedula receptor';
    }
    return $keys;
}