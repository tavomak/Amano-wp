<?php

function cam_wp_widgets_init() {

  	/*
    Sidebar (one widget area)
     */
    register_sidebar( array(
        'name' => __( 'Sidebar', 'cam-wp' ),
        'id' => 'sidebar-widget-area',
        'description' => __( 'The sidebar widget area', 'cam-wp' ),
        'before_widget' => '<section class="%1$s %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ) );

    register_sidebar( array(
        'name' => __( 'Woo-h-widget', 'cam-wp' ),
        'id' => 'woo-horizontal-widget-area',
        'description' => __( 'The woocommerce widget area', 'cam-wp' ),
        'before_widget' => '<section class="%1$s %2$s col-xs-4">',
        'after_widget' => '</section>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ) );

  	/*
    Footer (three widget areas)
     */
    register_sidebar( array(
        'name' => __( 'Footer', 'cam-wp' ),
        'id' => 'footer-widget-area',
        'description' => __( 'The footer widget area', 'cam-wp' ),
        'before_widget' => '<div class="%1$s %2$s col-sm-4">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ) );

}
add_action( 'widgets_init', 'cam_wp_widgets_init' );
