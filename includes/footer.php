    </div><!-- Cierre de content-wrapper-->
    <?php tha_footer_before(); ?>

    <!--Ventana Modal de contacto-->
    <div class="contacto">
      <div id="say-hellow" tabindex="-1" role="dialog" class="modal fade">
        <div role="document" class="modal-dialog modal-lg">
          <div id="modalbox" class="modal-content">
            <div class="modal-header">
              <button type="button" data-dismiss="modal" aria-label="Cerrar" class="close"><span aria-hidden="true">&times;</span></button>
              <h3 class="modal-tittle text-center">Contacto</h3> </div>
            <div class="modal-body">
              <div>
                <?php echo do_shortcode( '[contact-form-7 id="11" title="Formulario de contacto 1"]' ); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--Area de witgets sobre el pie de página-->
    <div class="container">
        <div class="row">
            <?php dynamic_sidebar('footer-widget-area'); ?>
        </div>
    </div>

    <footer class="container-fluid site-footer">
      <?php tha_footer_top(); ?>
      <div class="container">
        <!--Iconos informativos-->
        <div class="row">
          <div class="col-xs-4">
            <span class="icon-cart"></span>
            <p>Pago seguro con el respaldo de Instapago</p>
          </div>
          <div class="col-xs-4">
            <span class="icon-shop"></span>
            <p>Entrega en 7 días laborables con ZOOM</p>
            </div>
          <div class="col-xs-4">
            <span class="icon-smile"></span>
            <p>Felicidad garantizada, te entregaremos calidad.</p>
          </div>

        </div>
        <!--Contenido del footer-->
        <div class="row">

          <div class="col-sm-4">
            <h3>SHOP</h3>
            <div class="col-xs-6 col-sm-4">
              <?php
              wp_nav_menu( array(
                'theme_location'  => 'a-mano-navbar',
                'menu_class'      => 'subeibaja-navbar',
                'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                'walker'          => new wp_bootstrap_navwalker()
              ));
              ?>
            </div>

          </div>

          <div class="col-sm-4">
            <h3>CONTACTO</h3>
            <p><b>Tienda San Luis Urb. San Luis.</b>
              <br>El Cafetal. Caracas.
              <br>(Local 26, al lado de Tequeños Las Tías)</p>
            <p><b>Teléfono: </b>+58 212 986 09 50</p>
            <p><strong>Lunes a Viernes: </strong>10:00 am-07:00 pm</p>
            <p><strong>Sábados: </strong>11:00 am-05:00 pm</p>
          </div>

          <div class="col-sm-4">
            <h3>SOCIAL</h3>
            <strong>Ventas Online - Al mayor</strong>
            <p>info@calzadosamano.com </p>
            <p><strong>Teléfono:</strong> +58 212 991 30 02</p><strong>Lunes a Viernes:</strong>
            <p> Horario corrido de 8:30 am -3:30 pm.</p>
          </div>

        </div>

          <div class="row">
            <h4 class="text-center">SUBIBAJA C.A RIF: J-405745282</h4>
          </div>

      </div>


      <?php tha_footer_bottom(); ?>
    </footer>
    <!--Contenedor de creditos-->
    <div class="container text-center footer-estela">
      <ul class="list-inline">
        <li>
          <p class="copy">&copy;
            <?php echo date('Y'); ?>, Derechos reservados.</p>
        </li>
        <li class="list-inline">
          <a href="http://estelaestudio.com/">
            <p class="est">Designed and coded by</p>
          </a>
        </li>
        <li class="list-inline">
          <a href="http://estelaestudio.com/">
           <img class="" src="<?php bloginfo('template_directory'); ?>/assets/img/estela-logo.png" onmouseover="this.src='<?php bloginfo('template_directory'); ?>/assets/img/estela-logo-hover.png'" onmouseout="this.src=' <?php bloginfo('template_directory'); ?>/assets/img/estela-logo.png '" alt="Estela estudio de diseño">
          </a>
        </li>
      </ul>
    </div>
    <?php tha_footer_after(); ?>
    <?php wp_footer(); ?>
    <?php tha_body_bottom(); ?>
  </body>
</html>
