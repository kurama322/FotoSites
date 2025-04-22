<?php

add_action ( 'wp_enqueue_scripts' , 'foto_name_scripts' );
function foto_name_scripts() {
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap1', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css');
    wp_enqueue_style('fonts','https://fonts.googleapis.com/css?family=Abhaya+Libre:regular,500,600,700,800');
    wp_enqueue_style('main', get_template_directory_uri(). '/css/main.css');

    
    wp_deregister_script ( 'jquery-core' );
	wp_register_script ( 'jquery-core' , 'https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js' );
	wp_enqueue_script ( 'jquery' );
    wp_enqueue_script('jsdelivr','https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js');
    wp_enqueue_script('js',get_template_directory_uri(). '/js/script.js', array('jquery'),'null', true);
    
}

add_theme_support('post-thumbnails');

add_theme_support('title-tag');

add_theme_support('custom-logog');

