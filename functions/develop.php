<?php

//añadir capacidad de woocommerce a usuarios editores
function add_theme_caps() {
    $role = get_role( 'editor' );

    $role->add_cap( 'edit_products' );
    $role->add_cap( 'manage_woocommerce' );
    $role->add_cap( 'view_woocommerce_reports' );
    $role->add_cap( 'manage_woocommerce_products' );
    $role->add_cap( 'edit_others_products' );
    $role->add_cap( 'edit_theme_options' );
}
add_action( 'admin_init', 'add_theme_caps');

/* Desactivar Barra de wordpress para todos los usuarios */
  show_admin_bar(false);


// CUSTOM ADMIN LOGIN HEADER LOGO
function my_custom_login_logo()
{
    echo '<style  type="text/css"> h1 a {  background-image:url(' . get_bloginfo('template_directory') . '/assets/img/dash-logo.png)  !important;} </style>';
}
add_action('login_head',  'my_custom_login_logo');

// CUSTOM ADMIN DASHBOARD HEADER LOGO
function wpb_custom_logo() {
echo '
<style type="text/css">
#wpadminbar #wp-admin-bar-wp-logo > .ab-item .ab-icon:before {
background-image: url(' . get_bloginfo('stylesheet_directory') . '/assets/img/favicon.png) !important;
background-size: cover;
color:rgba(0, 0, 0, 0);
}
#wpadminbar #wp-admin-bar-wp-logo.hover > .ab-item .ab-icon {
background-position: 0 0;
}
</style>
';
}
add_action('wp_before_admin_bar_render', 'wpb_custom_logo');

// Cambio de icono Entradas/Noticias
function add_menu_icons_styles(){
    ?>
    <style>
    #adminmenu #menu-posts div.wp-menu-image:before { content: '\f488'; }
    </style>
    <?php }
add_action( 'admin_head', 'add_menu_icons_styles' );

// Admin footer modification
function remove_footer_admin ()
{
    echo '<span id="footer-thankyou">Developed by <a href="http://www.estelaestudio.com" target="_blank">Estela estudio de diseño</a></span>';
}
add_filter('admin_footer_text', 'remove_footer_admin');

//Cambiar Entradas por noticias
function edit_admin_menus() {
    global $menu;
    global $submenu;

    $menu[5][0] = 'Noticias';
    $submenu['edit.php'][5][0] = 'Lista de noticias';
    $submenu['edit.php'][10][0] = 'Agregar noticia';
}
add_action( 'admin_menu', 'edit_admin_menus' );

/*//Gets post cat slug and looks for single-[cat slug].php and applies it
add_filter('single_template', 'check_for_category_single_template');
function check_for_category_single_template( $t )
{
  foreach( (array) get_the_category() as $cat )
  {
    if ( file_exists(TEMPLATEPATH . "/single-category-{$cat->slug}.php") ) return TEMPLATEPATH . "/single-category-{$cat->slug}.php";
    if($cat->parent)
    {
      $cat = get_the_category_by_ID( $cat->parent );
      if ( file_exists(TEMPLATEPATH . "/single-category-{$cat->slug}.php") ) return TEMPLATEPATH . "/single-category-{$cat->slug}.php";
    }
  }
  return $t;
}
function custom_excerpt_length( $length ) {
        return 10;
    }
    add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );*/

// Permiso a usuarios editores para modificar theme
// get the the role object
$role_object = get_role( 'editor' );
// add $cap capability to this role object
$role_object->add_cap( 'edit_theme_options' );

?>
