<?php
/*
Template Name: Portada/Home
*/
?>

<?php get_template_part('includes/header'); ?>

<section class="container-fluid cd_carousel">
    <?php
            echo do_shortcode('[image-carousel category=”home” showcaption=”false” showcontrols=”false”]');
    ?>
</section>

<div class="home-main-center">
<?php the_content()?>
</div>

<?php get_template_part('includes/footer'); ?>
