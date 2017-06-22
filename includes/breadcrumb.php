<!--Navegacion de usuarios-->
<nav class="container">
  <div class="row">
    <ul class="woo_user_nav">

      <li class="woo_user_nav__item">
        <div class="current_user">
          <?php

          global $current_user;
          get_currentuserinfo();

          if (is_user_logged_in()){
            echo '
              <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="loginMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                  Hola ' . $current_user->display_name . '
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="loginMenu">
                  <li><a href="'.get_permalink( get_option('woocommerce_myaccount_page_id') ).'" class="woo-login-popup-sc-open">Tu cuenta</a></li>
                  <li><a href="'.wp_logout_url( home_url('/') /*get_permalink(woocommerce_get_page_id( 'myaccount' ) )*/ ).'" class="current_user__link">Salir</a></li>
                </ul>
              </div>
            ';
            //echo '<a href="'.get_permalink( get_option('woocommerce_myaccount_page_id') ).'" class="current_user__link"> Hola ' . $current_user->display_name . '</a>';
          }else{
            echo '
              <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="loginMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                  Login
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="loginMenu">
                  <li><a href="#" class="woo-login-popup-sc-open">Ingresar</a></li>
                  <li><a href="#woo-login-popup-sc-register" class="woo-login-popup-sc-open">Crear cuenta</a></li>
                </ul>
              </div>
            ';
            //echo'<a href="'.get_permalink( get_option('woocommerce_myaccount_page_id') ).'" class="current_user__link">Login</a>';
          }

          ?>
        </div>
      </li>

      <?php

      global $woocommerce;
      $cart_url = $woocommerce->cart->get_cart_url();

      if ( class_exists( 'WooCommerce' ) ) {
        $cartUrl = wc_get_cart_url();
        $cart_contents_count = WC()->cart->get_cart_contents_count();
        if ($cart_contents_count !== 0) {
          echo '<li class="woo_user_nav__li"><div class="cart_count"><a href="'.$cartUrl.'" class="cart_count__link"><span class="number_count">'.sprintf ( _n( '%d', '%d', $cart_contents_count ), $cart_contents_count ).'</span>'. WC()->cart->get_cart_total() .' </a></div></li>';
        }/*else{
            echo '<a href="'.$cart_url.'" class="cart_count__link">carrito</a>';
            }*/
      }

      ?>

      <li class="fl">
        <a type="button" data-toggle="modal" data-target="#modal_reg_pago" class="btn btn-default">Registra tu pago</a>
      </li>

    </ul>
  </div>
</nav>

<!--Ventana modal para registro de deposito-->
<div class="modal_reg_pago">
  <div id="modal_reg_pago" tabindex="-1" role="dialog" class="modal fade">
    <div role="document" class="modal-dialog modal-lg">
      <div id="modalbox" class="modal-content">
        <div class="modal-header">
            <button type="button" data-dismiss="modal" aria-label="Cerrar" class="close"><span aria-hidden="true">&times;</span></button>
            <h3 class="modal-tittle text-center">Registra tu pago</h3> </div>
        <div class="modal-body">
            <div>
                <?php echo do_shortcode( '[contact-form-7 id="802" title="Registrar Pago"]' ); ?>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
