<nav class="container woo_user_nav">

  <!--<div class="col-sm-7 col-lg-9 woo-user-nav__item">
    <?php// do_shortcode('[woocommerce_product_search]'); ?>
  </div>-->

  <div class="col-sm-6 woo_user_nav__item">
    <ul class="woo_user_nav__ul">
      <li class="woo_user_nav__li">
        <div class="current_user">

          <?php
          global $current_user;
          get_currentuserinfo();
          if (is_user_logged_in()){
              //echo get_avatar( $current_user->ID, 64 );
               echo '<a href="'.get_permalink( get_option('woocommerce_myaccount_page_id') ).'" class="current_user__link"> Hola ' . $current_user->display_name . '</a>';
          }else{
              echo'<a href="'.get_permalink( get_option('woocommerce_myaccount_page_id') ).'" class="current_user__link">Login</a>';
          }
          ?>

        </div>
      </li>


      <?php
      global $woocommerce;
      $cart_url = $woocommerce->cart->get_cart_url();

      if ( class_exists( 'WooCommerce' ) ) {
        // Si woocommerce exsiste
        $cartUrl = wc_get_cart_url();
        $cart_contents_count = WC()->cart->get_cart_contents_count();
        if ($cart_contents_count !== 0) {
          // Si articulos en el carrito muestra el numero y el monto
          echo '<li class="woo_user_nav__li"><div class="cart_count"><a href="'.$cartUrl.'" class="cart_count__link"><span class="number_count">'.sprintf ( _n( '%d', '%d', $cart_contents_count ), $cart_contents_count ).'</span>'. WC()->cart->get_cart_total() .' </a></div></li>';
        }/*else{
            echo '<a href="'.$cart_url.'" class="cart_count__link">carrito</a>';
            }*/
      }

      ?>



      <li class="woo_user_nav__li">
        <a type="button" data-toggle="modal" data-target="#modal_reg_pago" class="register__link">Registra tu pago</a></li>
      </li>

    </ul>
  </div>
</nav>
