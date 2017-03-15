<!DOCTYPE html>
<?php tha_html_before(); ?>
<html class="no-js">
<head>
  <?php tha_head_top(); ?>
	<title><?php wp_title('•', true, 'right'); //bloginfo('name'); ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php tha_head_bottom(); ?>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php tha_body_top(); ?>

<!--[if lt IE 8]>
<div class="alert alert-warning">
	You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
</div>
<![endif]-->
    <div class="wrapper-loader">
<!--       <div class="preloader sk-cube"></div>-->
        <div class="sk-cube-grid">
            <div class="sk-cube sk-cube1"></div>
            <div class="sk-cube sk-cube2"></div>
            <div class="sk-cube sk-cube3"></div>
            <div class="sk-cube sk-cube4"></div>
            <div class="sk-cube sk-cube5"></div>
            <div class="sk-cube sk-cube6"></div>
            <div class="sk-cube sk-cube7"></div>
            <div class="sk-cube sk-cube8"></div>
            <div class="sk-cube sk-cube9"></div>
            <br>
            <p class="text-center">Cargando...</p>
        </div>
    </div>

    <div id="logo-principal" class="text-center">
       <h1 class="text-center">
           <a href="<?php echo home_url('/'); ?>">
               <img src="<?php bloginfo('template_directory'); ?>/assets/img/CAMLogo.png" alt="Fundación Telema">
           </a>
       </h1>
   </div>

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-upper">
                    <span class="sr-only">menú</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbar-upper">
                <ul class="list-inline">
                    <?php
                        wp_nav_menu( array(
                            'menu'              => 'primary',
                            'theme_location'    => 'primary',
                            'depth'             => 3,
                            'menu_class'        => 'nav navbar-nav',
                            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                            'walker'            => new wp_bootstrap_navwalker())
                        );
                    ?>
                </ul>
            </div>
        </div>
    </nav>
