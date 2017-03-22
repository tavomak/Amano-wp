<?php
/*
Plantilla base donde se carga woocommerce.
*/
?>
<?php get_template_part('includes/header'); ?>

<div class="container">
  <div class="row">

    <div class="">
      <div id="content" role="main">
        <?php tha_content_before(); ?>
        <div class="woocommerce">
            <?php woocommerce_content(); ?>
        </div>
      </div><!-- /#content -->
    </div>


  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_template_part('includes/footer'); ?>
