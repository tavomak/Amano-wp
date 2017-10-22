<?php get_template_part('includes/header'); ?>

  <?php if ( is_front_page() || is_page('Home')) : ?>

  <section class="welcome">

    <div class="welcome-content container">
      <div class="welcome-txt col-sm-4 col-lg-4 col-lg-offset-1">
        <h2>Bienvenidos a<br>Calzados A' Mano</h2>
        <p>Somos una marca venezolana que produce de la mano de los mejores artesanos productos de la mejor calidad.</p>
        <p>Nos especializamos en la confección de zapatos para niñas y dama en modelos clásicos tipo bailarina en Venezuela desde 1994.</p>
      </div>
    </div>

    <?php if ( wp_is_mobile() ) :?>
    <img src="<?php bloginfo('template_directory'); ?>/assets/img/welcome-mobile.jpg" alt="Bienvenidos a Calzados A' Mano" class="img-responsive welcome-img">
    <?php else: ?>
    <img src="<?php bloginfo('template_directory'); ?>/assets/img/welcome.jpg" alt="Bienvenidos a Calzados A' Mano" class="img-responsive welcome-img">
    <?php endif; ?>

  </section>

  <div class="text-center">
    <p>Siempre encontrarás algo especial en</p>
    <h2 class="welcome-subtitle">CALZADOS A´ MANO</h2>
  </div>
  
  <section class="container">
    <h3>
      <img src="<?php bloginfo('template_directory'); ?>/assets/img/001-instagram-1.png" alt="Instagram"/>
      <span>Síguenos.</span>
    </h3>
    <?php if ( wp_is_mobile() ) :?>
    <?php echo do_shortcode( '[instagram-feed num=4]' ); ?>
    <?php else: ?>
    <?php echo do_shortcode( '[instagram-feed]' ); ?>
    <?php endif; ?>

  </section>

<?php endif; ?>

<div class="container">
  <div class="row">

    <div class="col-xs-12">
        <?php get_template_part('includes/loops/content', 'page'); ?>
    </div>

  </div><!-- /.row -->
</div><!-- /.container -->

<?php if ( is_front_page() || is_page('Home')) : ?>
<section class="adv-subibaja">
  <div class="container">
    <div class="row">

      <div class="col-sm-4 text-center">
        <div class="adv-subibaja-txt">
          <h3 class="adv-subibaja-title">Conoce nuestra marca</h3>
          <img src="<?php bloginfo('template_directory'); ?>/assets/img/subibaja-logo-white.png" alt="Subibaja Logo">
        </div>
        <a href="" class="cam-button">Ir a la tienda</a>
      </div>

      <div class="col-sm-7 col-sm-offset-1 text-center adv-subibaja-img">
        <img src="<?php bloginfo('template_directory'); ?>/assets/img/welcome-subibaja.jpg" alt="Bailarina Subibaja" class="img-responsive">
      </div>
    
    </div>
  </div>
</section>
<?php endif; ?>

<?php get_template_part('includes/footer'); ?>