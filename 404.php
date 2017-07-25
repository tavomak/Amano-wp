<?php get_template_part('includes/header'); ?>

<div class="container-fluid nofound">
  <div class="container nofound-container">
    <div class="row nofound-content">
      <div class="nofound-text">
        <h2><span class="nofound-text__title">404</span>¡Lo sentimos, <br>no encontramos <br>lo que buscas !</h2>
      </div>
      <a href="<?php echo home_url('/'); ?>" class="cam-button">Volver a la tienda</a>
      <!-- <div class="col-sm-4 col-sm-offset-2">
        <div class="nofound-img">
        </div>
      </div> -->
    </div><!-- /.row -->
  </div>
</div><!-- /.container -->

<?php get_template_part('includes/footer'); ?>