<?php
/*
Template Name: About
*/
?>

<?php get_template_part('includes/header'); ?>

<section class="ab-since">
    <div class="ab-since__mobile--img"></div>
    <div class="container">
        <div class="col-sm-4 ab-since--txt">
            <h2>Calzados A'mano </h2>
            <p>es una empresa ubicada en la ciudad de Caracas desde 1994 en el mercado de calzados en Venezuela.</p>
        </div>
    </div>
</section>
<section class="ab-shoes">
    <div class="ab-shoes__mobile--img"></div>
    <div class="container">
        <div class="ab-shoes--content">
            <div class="col-sm-6">
                <div class="ab-shoes--img"></div>
            </div>
            <div class="col-sm-6">
                <div class="ab-shoes--txt">
                    <h4>Nuestros zapatos son de alta calidad</h4> <p>y manufacturados por artesanos con pieles de primera. <h4>Nos caracterizamos por confeccionar modelos clásicos tipo bailarina,</h4> siempre innovando en colores y accesorios de acuerdo a la moda y temporada del año. Nos especializamos en zapatos para niños para ocasiones especiales, tales como: bautizos, cortejos, primera comunión, piñatas, entre otros.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ab-lines">
    <div class="ab-lines__mobile--img"></div>
    <div class="container">
        <div class="col-sm-6 col-sm-offset-6 ab-lines--txt">
            <h4>También contamos con nuestra línea casual de zapatillas</h4> <p>para mujeres que buscan lucir modernas y a la vez disfrutar de un cómodo calzado. Confeccionamos modelos escolares para varones y niñas adaptándonos a las reglas de cada colegio.</p>
        </div>
    </div>
</section>
<section class="ab-subibaja">
    <div class="ab-subibaja__mobile--img"></div>
    <div class="container">
        <div class="col-sm-6 ab-subibaja--img">
            <img src="<?php bloginfo('template_directory'); ?>/assets/img/subibaja-logo-blue.png" alt="Subibaja">
        </div>
        <div class="col-sm-6 ab-subibaja--txt">
            <h4>Subibaja es una marca  con una línea más divertida y creativa.</h4> <p>Con colores alegres como  nuestras sandalias para niñas que les gusta expresarse y estar cómodas...</p>
        </div>
    </div>
</section>
<section class="ab-subibaja-girls">
    <div class="ab-subibaja-girls__mobile--img"></div>
    <div class="container">
        <div class="col-sm-6 col-sm-offset-6 ab-subibaja-girls--txt">
            <h4>Incursionamos con una línea de trajes de baño con ilustraciones de helados, que pueden usar tanto niños como adultos. </h4>
    </div>
    </div>
</section>
<section class="ab-subibaja-boys">
    <div class="ab-subibaja-boys__mobile--img"></div>
    <div class="container">
        <div class="col-sm-6 ab-subibaja-boys--txt">
            <h4>Con nuestos productos Subibaja siempre estarán preparados para una nueva aventura.</h4>
        </div>
    </div>
</section>

<div class="home-main-center">
<?php the_content()?>
</div>

<?php get_template_part('includes/footer'); ?>