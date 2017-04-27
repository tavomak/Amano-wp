$(document).ready(function() {

    //Función que remueve el precargador una vez cargados todos los elementos de la pagina
    $(window).on('load', function() {
        $('.wrapper-loader').fadeOut('slow',function(){$(this).remove();});
    });

    // Adding Bootstrap classes to the Comments stuff
	$(".commentlist li").addClass("panel panel-default");
	$(".comment-reply-link").addClass("btn btn-default");

  	// HOVERNAV - navbar dropdown on hover.
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

	/*//MEGANAV - allows GRAND-CHILD links to be displayed in a mega-menu on screens larger than phones.
	$('.navbar').addClass('meganav');
	$('.meganav .dropdown-menu .dropdown-menu').parent().addClass('has-children').parents('li').addClass('dropdown mega-menu');

	// Forms
	$('select, input[type=text], input[type=email], input[type=password], textarea').addClass('form-control');
	$('input[type=submit]').addClass('btn btn-primary');*/

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
    //ocultar envio gratuito
    //$('.woocommerce ul#shipping_method li:first-child').addClass('envio-gratuito dn');

    /*
	// Delete this segment if you don't want it, and delete the corresponding CSS in bst.css
	$('div.woocommerce').wrapInner('<article></article>');
	$('.woocommerce-pagination ul').css({"border": 0}).removeClass().addClass('pagination pagination-lg');
	$('.woocommerce-pagination li').css({border: 0});
	$('.woocommerce-pagination .next').text('»');
	$('.woocommerce-pagination .prev').text('«');
	$('.woocommerce-pagination .current').removeClass().addClass('active').css({background: "#e7e7e7"});
	$('.woocommerce-message a.button.wc-forward').removeClass().addClass('btn btn-success').append('&nbsp; <i class="glyphicon glyphicon-arrow-right"></i>').css({display: "block", float: "right", marginTop: -7});
	$('.woocommerce a.button.wc-backward').removeClass().addClass('btn btn-info').prepend('<i class="glyphicon glyphicon-arrow-left"></i> &nbsp;').css({display: "inline-block"});
	$('.woocommerce-message').removeClass().addClass('alert alert-success');
	$('.woocommerce-info').removeClass().addClass('alert alert-warning');
	$('.woocommerce .cart button').removeClass().addClass('btn btn-primary').css({height: 28, paddingTop: 3});
	$('.woocommerce .shipping-calculator-button').addClass('btn btn-primary btn-block').css({height: 34});
	$('.shipping-calculator-form .button').removeClass().addClass('btn btn-success btn-block');
	$('.woocommerce input[type=submit]').removeClass().addClass('btn btn-primary').css({height: 34});
	$('.woocommerce input[name=proceed]').removeClass().addClass('btn btn-success');
    */

});
