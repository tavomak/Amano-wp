<?php
/*
Plantilla base donde se carga woocommerce.
*/
?>
<?php get_template_part('includes/header'); ?>


<div class="container">
    <div class="woocommerce-content-cam">
        <?php woocommerce_content(); ?>
    </div>
    <!--<div class="hidden-xs col-sm-4" id="sidebar" role="navigation">
       <?php //get_template_part('includes/sidebar'); ?>
    </div>-->
</div>
</div>

<?php get_template_part('includes/footer'); ?>
