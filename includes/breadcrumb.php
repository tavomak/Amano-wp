<nav class="woo-help-nav container-fluid">
	<div class="col-sm-7 col-lg-9 nav-item"><?php woocommerce_breadcrumb(); ?></div>
    <div class="col-sm-5 col-lg-3 nav-item">
        <div class="barra-iconos-top">
            <ul class="nav">
                <li class="icon-session" role="presentation">
                   <?php
                    global $current_user;
                    get_currentuserinfo();
                    if (is_user_logged_in()){
                        //echo get_avatar( $current_user->ID, 64 );
                         echo '<a href="'.get_permalink( get_option('woocommerce_myaccount_page_id') ).'"> hola ' . $current_user->display_name . '</a>';
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
                            echo '<div class="icon-cart" role="presentation"><a href="'.$cart_url.'">carrito</a><div>';
                        }
                    }
                    ?>

                </li>
            </ul>
        </div>
    </div>
</nav>


        <div class="barra-iconos-top">
            <div class="container">
                <div class="col-sm-6 col-sm-offset-6">

                </div>
            </div>
        </div>
