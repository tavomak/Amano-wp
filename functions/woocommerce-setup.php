<?php

//Reorganizacion de elementos de woocmommerce: productos por fila, pagina, ocultar tabs etc.
require_once locate_template('/functions/woocommerce-functions/base.php');
//loop que muestra la textura de los productos relacionados
require_once locate_template('/functions/woocommerce-functions/loop-colores.php');
//Ubicacion de los envios
require_once locate_template('/functions/woocommerce-functions/pickup-locations.php');
//campos de la pagina de checkout
require_once locate_template('/functions/woocommerce-functions/checkout.php');
//Campos de envio adicionales
require_once locate_template('/functions/woocommerce-functions/custom-pickup.php');


?>
