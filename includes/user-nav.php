<!--Navegacion de usuarios-->
<nav class="container-fluid inline woo_user_nav">
  <ul class="container list-inline">

    <li class="woo_user_nav__item">
      <div class="current_user">

        <?php
        global $current_user;
        get_currentuserinfo();

        if (is_user_logged_in()){
          echo '
            <div class="dropdown">
              <a href=""class="dropdown-toggle woo_user_nav__link" id="loginMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Hola ' . $current_user->display_name . '
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" aria-labelledby="loginMenu">
                <li><a href="'.get_permalink( get_option('woocommerce_myaccount_page_id') ).'" class="woo-login-popup-sc-open">Tu cuenta</a></li>
                <li><a href="'.wp_logout_url( home_url('/') /*get_permalink(woocommerce_get_page_id( 'myaccount' ) )*/ ).'" class="current_user__link">Salir</a></li>
              </ul>
            </div>
          ';
        }
        else{
          echo '
            <div class="dropdown">
              <a href="" class="dropdown-toggle woo_user_nav__link" id="loginMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Mi cuenta
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" aria-labelledby="loginMenu">
                <li><a href="" class="woo-login-popup-sc-open">Ingresar</a></li>
                <li><a href="#woo-login-popup-sc-register" class="woo-login-popup-sc-open">Crear cuenta</a></li>
              </ul>
            </div>
          ';
        }
        ?>

      </div>
    </li>

    <li class="hidden-xs woo_user_nav__item">
      <a href="" class="woo_user_nav__link" data-toggle="modal" data-target="#modal_reg_pago">Registra tu pago</a>
    </li>
    <li class="hidden-xs woo_user_nav-search woo_user_nav__item">
      <?php get_template_part('includes/navbar-search'); ?>
    </li>

    <li class="pull-right woo_user_nav__item">
      <?php
      global $woocommerce;
      $cart_url = $woocommerce->cart->get_cart_url();

      if ( class_exists( 'WooCommerce' ) ) {
        $cartUrl = wc_get_cart_url();
        $cartTotal = WC()->cart->get_cart_total();
        $cartCount = WC()->cart->get_cart_contents_count();
        if ($cartCount == 0) {
          echo '
            <span class="bag-count__disabled"></span>
          ';
        }else{
          echo '
            <a href="'.$cartUrl.'" class="cart-amount woo_user_nav__link">'.$cartTotal.'<span class="bag-count">'.$cartCount.'</span><span class="bag-count__icon"></span></a>
          ';
        }
      }
      ?>
    </li>

  </ul>

</nav>

<!--Ventana modal para registro de deposito-->
<div class="modal_reg_pago">
  <div id="modal_reg_pago" tabindex="-1" role="dialog" class="modal fade">
    <div role="document" class="modal-dialog modal-lg">
      <div id="modalbox" class="modal-content">
        <div class="modal-header">
            <button type="button" data-dismiss="modal" aria-label="Cerrar" class="close"><span aria-hidden="true">&times;</span></button>
            <h3 class="modal-tittle text-center">Registrar depósito</h3> </div>
        <div class="modal-body">
            <div>
                <?php echo do_shortcode( '[contact-form-7 id="802" title="Registrar Pago"]' ); ?>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
