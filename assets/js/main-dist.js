$(document).ready(function(){function a(a){a.matches?$("ul.navbar-nav > li").addClass("hovernav"):$("ul.navbar-nav > li").removeClass("hovernav")}$(window).on("load",function(){$(".cd-loader").fadeOut("slow",function(){$(this).remove()})}),$(".woocommerce div.product").addClass("container-fluid").wrapInner('<article class="row"></article>'),$(".woocommerce div.product div.images").removeClass("images").addClass("col-sm-8 col-md-6 col-lg-6 imagenes"),$("div.summary.entry-summary").removeClass("summary entry-summary").addClass("col-sm-4 col-md-4 col-lg-4 col-md-offset-1 sumario"),$(".woocommerce-content-cam div.imagenes a.woocommerce-main-image").addClass("col-sm-9"),$(".woocommerce-content-cam div.imagenes div.thumbnails").removeClass("thumbnails columns-3").addClass("col-sm-2 col-sm-offset-1 thumb"),$(".woocommerce-content-cam div.sumario").wrapInner('<div class="wrap-sumario"></div>'),$(".widget_layered_nav select").wrap('<span class="span-wrapper" />'),$(".dropdown_layered_nav_talla option:first-child").text("Talla"),$(".dropdown_layered_nav_acabado option:first-child").text("Acabado"),$(".dropdown_layered_nav_color option:first-child").text("Color");var e=window.matchMedia("(min-width: 768px)");if(e.matches?$("ul.navbar-nav > li").addClass("hovernav"):$("ul.navbar-nav > li").removeClass("hovernav"),matchMedia){var e=window.matchMedia("(min-width: 768px)");e.addListener(a),a(e)}$(window).width()>=768&&$(".hovernav .dropdown-toggle").removeAttr("data-toggle"),$(window).resize(function(){$(window).width()<768?$(".hovernav .dropdown-toggle").attr("data-toggle")||$(".hovernav .dropdown-toggle").attr("data-toggle","dropdown"):$(".hovernav .dropdown-toggle").removeAttr("data-toggle")}),$(".navbar").addClass("meganav"),$(".meganav .dropdown-menu .dropdown-menu").parent().addClass("has-children").parents("li").addClass("dropdown mega-menu"),$("#menu-principal > li.menu-item").addClass("menu__item"),$("#menu-principal .dropdown-toggle + ul.dropdown-menu").wrapInner('<ul class="container menu-wrapper" />'),$("#menu-principal .dropdown-menu .menu-item-has-children").wrapInner('<div class="item-wrapper" />'),$('#menu-principal .dropdown-menu .menu-item a[title="Damas"').html('<p>Damas</p><div class="img-damas" ><img src="'+my_data.template_directory_uri+'/assets/img/damas.jpg" alt="Zapatos de dama"/></div>'),$('#menu-principal .dropdown-menu .menu-item a[title="Plantillas"').html('<p>Plantillas</p> <img src="'+my_data.template_directory_uri+'/assets/img/plantillas.jpg" alt="Conoce nuestra linea de Plantillas" class="img-damas" />');var n=$("ul#menu-principal").children().length,o=100/n,d=o.toFixed(0)+"%";$("#menu-principal .menu__item ").css("min-width",d)});