<?php
/*
Todas las funciones estan organizadas en la carpeta de funciones.
*/

require_once locate_template('/functions/cleanup.php');
require_once locate_template('/functions/setup.php');
require_once locate_template('/functions/develop.php');
require_once locate_template('/functions/enqueues.php');
require_once locate_template('/functions/navbar.php');
require_once locate_template('/functions/widgets.php');
require_once locate_template('/functions/search.php');
require_once locate_template('/functions/feedback.php');
require_once locate_template('/functions/woocommerce-setup.php');
require locate_template('/functions/theme-hooks.php');

//include locate_template('/includes/options/cam-wp-options.php');

add_action('after_setup_theme', 'true_load_theme_textdomain');

function true_load_theme_textdomain(){
    load_theme_textdomain( 'cam-wp', get_template_directory() . '/languages' );
}
