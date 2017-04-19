<!DOCTYPE html>
<?php tha_html_before(); ?>
<html class="no-js">
    <head>
        <?php tha_head_top(); ?>
        <title><?php wp_title('•', true, 'right'); //bloginfo('name'); ?></title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php tha_head_bottom(); ?>
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
    <?php tha_body_top(); ?>

    <!--[if lt IE 8]>
    <div class="alert alert-warning">
        You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
    </div>
    <![endif]-->
        <div class="wrapper-loader">
    <!--       <div class="preloader sk-cube"></div>-->
            <div class="sk-cube-grid">
                <div class="sk-cube sk-cube"></div>
                <br>
                <p class="text-center">Cargando...</p>
            </div>
        </div>

        <div class="barra-iconos-top">
            <div class="container">
                <div class="col-sm-6 col-sm-offset-6">
                    <ul class="nav nav-pills pull-right">
                        <li class="icon-session" role="presentation">
                           <?php
                            global $current_user;
                            get_currentuserinfo();
                            if (is_user_logged_in()){
                                //echo get_avatar( $current_user->ID, 64 );
                                 echo '<a href="'.get_permalink( get_option('woocommerce_myaccount_page_id') ).'"> hola ' . $current_user->user_login . '</a>';
                            }else{
                                echo'<a href="'.get_permalink( get_option('woocommerce_myaccount_page_id') ).'">inicio de sesión</a>';
                            }
                            ?>
                        </li>

                        <li>
                           <?php
                            global $woocommerce;
                            $cart_url = $woocommerce->cart->get_cart_url();
                            if ( class_exists( 'WooCommerce' ) ) {
                                // Si woocommerce exsiste
                                $cartUrl = wc_get_cart_url();
                                $cart_contents_count = WC()->cart->get_cart_contents_count();

                                if ($cart_contents_count !== 0) {
                                    // Si articulos en el carrito muestra el numero y el monto
                                    echo '<a class="cart-cuenta" href="'.$cartUrl.'">';
                                    echo '<span class="numero-cuenta">'.sprintf ( _n( '%d', '%d', $cart_contents_count ), $cart_contents_count ).'</span>';
                                    echo ' ';
                                    echo WC()->cart->get_cart_total();
                                    echo '</a>';
                                }else{
                                    echo '<div class="icon-cart hidden-xs" role="presentation"><a href="'.$cart_url.'">carrito</a><div>';
                                }
                            }
                            ?>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="hr-entre-nav">

        <div id="logo-principal" class="text-center">
           <h1 class="text-center">
               <a href="<?php echo home_url('/'); ?>">
                   <img src="<?php bloginfo('template_directory'); ?>/assets/img/CAMLogo.png" alt="Fundación Telema">
               </a>
           </h1>
       </div>

        <nav class="navbar navbar-default navbar-static-top navbar-upper">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-upper"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    <?php /* <a class="navbar-brand" href="<?php echo home_url('/'); ?>">
                        <?php bloginfo('name'); ?>
                            </a> */ ?> </div>
                <div class="collapse navbar-collapse" id="navbar-upper">
                    <?php
                                wp_nav_menu( array(
                                    'menu'              => 'primary',
                                    'theme_location'    => 'primary',
                                    'depth'             => 3,
                                    'container_class' => 'nav-menu-primary-container',
                                    'menu_class'        => 'nav navbar-nav text-center',
                                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                    'walker'            => new wp_bootstrap_navwalker())
                                );
                            ?>
                        <?php //get_template_part('includes/navbar-search'); ?>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
        <?php tha_header_before(); ?>
            <!--<div class="wrapper">-->
<hr class="hidden-xs">
