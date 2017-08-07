<?php
//Agregar Estados de Venezuela
function custom_woocommerce_states( $states ) {
  $states['VE'] = array(
    'Amazonas' => 'Amazonas',
    'Anzoátegui' => 'Anzoátegui',
    'Apure' => 'Apure',
    'Aragua' => 'Aragua',
    'Barinas' => 'Barinas',
    'Bolivar' => 'Bolivar',
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