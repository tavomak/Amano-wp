$(document).ready(function () {

    //Función que remueve el precargador una vez cargados todos los elementos de la pagina
    $(window).on('load', function () {
        $('.cd-loader').fadeOut('slow', function () {
            $(this).remove();
        });
    });

    // WOOCOMMERCE restyling
    //AGREGAR CONTENEDORES BOOTSTRAP A LAYOUT DE WOO
    $('.woocommerce div.product').addClass('container-fluid').wrapInner('<article class="row"></article>');
    //Agregar columnas a secciones
    $('.woocommerce div.product div.images').removeClass('images').addClass('col-sm-8 col-md-6 col-lg-6 imagenes');
    $('div.summary.entry-summary').removeClass('summary entry-summary').addClass('col-sm-4 col-md-4 col-lg-4 col-md-offset-1 sumario');
    //agregar columnas a imagenes
    $('.woocommerce-content-cam div.imagenes a.woocommerce-main-image').addClass('col-sm-9');
    $('.woocommerce-content-cam div.imagenes div.thumbnails').removeClass('thumbnails columns-3').addClass('col-sm-2 col-sm-offset-1 thumb');
    //Agregar wrap a sumario
    $('.woocommerce-content-cam div.sumario').wrapInner('<div class="wrap-sumario"></div>');

});
