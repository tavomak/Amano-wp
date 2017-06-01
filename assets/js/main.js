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

  // HOVERNAV - navbar dropdown on hover.
	// Delete this segment if you don't want it, and delete the corresponding CSS in bst.css
	// Uses jQuery Media Query - see http://www.sitepoint.com/javascript-media-queries/
	var mq = window.matchMedia('(min-width: 768px)');
	if (mq.matches) {
		$('ul.navbar-nav > li').addClass('hovernav');
	} else {
		$('ul.navbar-nav > li').removeClass('hovernav');
	};
  	// The addClass/removeClass also needs to be triggered on page resize <=> 768px
	function WidthChange(mq) {
		if (mq.matches) {
			$('ul.navbar-nav > li').addClass('hovernav');
		} else {
			$('ul.navbar-nav > li').removeClass('hovernav');
		}
	};
	if (matchMedia) {
		var mq = window.matchMedia('(min-width: 768px)');
		mq.addListener(WidthChange);
		WidthChange(mq);
	}
	// Remove dropdowns "data-toggle" for screens >= 768, and restore for small screens after resize.
	// (Delete this if you don't need it. It is only here because some people find that if they have
	// a highly complicated mega-menu, their grand-child links disappear if they click the parent link.)
	if ($(window).width() >= 768) {
		$('.hovernav .dropdown-toggle').removeAttr('data-toggle');
	}
	$(window).resize(function () {
	if ($(window).width() < 768 ) {
		if (!$('.hovernav .dropdown-toggle').attr('data-toggle')) {
			$('.hovernav .dropdown-toggle').attr('data-toggle', 'dropdown');
		}
	} else {
		$('.hovernav .dropdown-toggle').removeAttr('data-toggle');
	}
	});
	// Restore "clickable parent links" in navbar
	//$('.hovernav a').click(function () {
	//	window.location = this.href;
	//});

	//MEGANAV - allows GRAND-CHILD links to be displayed in a mega-menu on screens larger than phones.
	// Delete this segment if you don't want it, and delete the corresponding CSS in bst.css
	$('.navbar').addClass('meganav');
	$('.meganav .dropdown-menu .dropdown-menu').parent().addClass('has-children').parents('li').addClass('dropdown mega-menu');

});
