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
</div>
</div>

<?php get_template_part('includes/footer'); ?>
