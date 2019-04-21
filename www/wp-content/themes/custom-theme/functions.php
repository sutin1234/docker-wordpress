<?php

    // add styles
    wp_enqueue_style( 'style', get_stylesheet_uri()); // add style.css in root folder

    function add_enqueue_styles() {
        wp_enqueue_style( 'styles2', get_template_directory_uri() . '/css/styles2.css',false,'1.1','all'); // add styles custom folders
    }
    
    // add scripts
    function add_enqueue_scripts() {
        wp_enqueue_script( 'test_js', get_template_directory_uri() . '/js/test_js.js', array('jquery'), true );
    }

    // execute all action
    add_action( 'wp_enqueue_scripts', 'add_enqueue_styles' );
    add_action( 'wp_enqueue_scripts', 'add_enqueue_scripts' );


?>