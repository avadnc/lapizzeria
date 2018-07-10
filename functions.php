<?php

function lapizzeria_setup(){
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'lapizzeria_setup');

function lapizzeria_styles(){

    //registrar los estilos
    wp_register_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.0' );
    wp_register_style( 'google_fonts', 'https://fonts.googleapis.com/css?family=Open+Sans|Raleway:400,700,900', array() , '1.0.0' );
    wp_register_style( 'fontawesome', get_template_directory_uri() . '/css/all.css' , array('normalize') , '5.1.0' );
    wp_register_style( 'style', get_template_directory_uri() . '/style.css' , array('normalize') , '1.0' );
    
    //llamar a los estilos
    wp_enqueue_style( 'normalize' );  
    wp_enqueue_style( 'google_fonts' );
    wp_enqueue_style( 'fontawesome' );
    wp_enqueue_style( 'style' );

    //registrar js

    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.js', array(), '3.3.1', true );
    wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js',array('jquery'), '1.0.0.', true );

    wp_enqueue_script('jquery');
    wp_enqueue_script('scripts');
   
}

add_action( 'wp_enqueue_scripts' , 'lapizzeria_styles' );

function lapizzeria_menus(){

    register_nav_menus( array(
        'header-menu' => __( 'Header Menu', 'lapizzeria' ),
        'social-menu' => __( 'Social Menu', 'lapizzeria' )
    ) );
}

add_action( 'init', 'lapizzeria_menus' );