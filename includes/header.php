<!DOCTYPE html>
<?php tha_html_before(); ?>
<html class="no-js">

  <head>
    <?php tha_head_top(); ?>
    <title><?php wp_title('|', true, 'right'); //bloginfo('name'); ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php tha_head_bottom(); ?>
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <?php tha_body_top(); ?>

  <!--[if lt IE 8]><div class="alert alert-warning">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</div><![endif]-->

    <!--Precargador-->
    <div class="cd-loader">
        <div class="cd-loader__grid">
            <div class="cd-loader__item"></div>
            <br>
            <p class="text-center">Cargando...</p>
        </div>
    </div>

    <!--Insercion de menu de usuario-->
    <?php
    if (is_woocommerce()){
      echo get_template_part('includes/breadcrumb');
    }
    ?>

    <!--Logotipo-->
    <div class="logo-principal text-center">
      <h1 class="text-center">
        <a href="<?php echo home_url('/'); ?>">
          <img src="<?php bloginfo('template_directory'); ?>/assets/img/CAMLogo.png" alt="Calzados a mano">
        </a>
      </h1>
    </div>

    <!--Navegacion principal-->
    <nav class="navbar navbar-default navbar-static-top navbar-upper nav-principal-cam">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-upper">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <?php /* <a class="navbar-brand" href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a> */ ?>
        </div>
        <div class="collapse navbar-collapse" id="navbar-upper">
          <?php
          wp_nav_menu( array(
            'menu'              => 'primary',
            'theme_location'    => 'primary',
            'depth'             => 3,
            //'container_class' => 'nav-menu-primary-container',
            'menu_class'        => 'nav navbar-nav text-center',
            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
            'walker'            => new wp_bootstrap_navwalker())
          );
          ?>
          <?php //get_template_part('includes/navbar-search'); ?>
        </div>
      </div>
    </nav>

    <?php tha_header_before(); ?>
    <!--<div class="wrapper">-->
