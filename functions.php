<?php

 function makoh_theme_menus() {

    $locations = array(
        'primary' => 'Desktop  Primary Left Sidebar',
        'footer' => 'Footer menu items',
    );
    register_nav_menus($locations);
 }
 add_action('init', 'makoh_theme_menus');




function makoh_theme_support() {
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'makoh_theme_support');


function makoh_theme_register_styles() {

    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style('makoh-theme-styles', get_template_directory_uri()."/style.css", array('makoh-theme-bootstrap'), $version, 'all');
    wp_enqueue_style('makoh-theme-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '1.0', 'all');

    wp_enqueue_style('makoh-theme-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '1.0', 'all');

}
add_action('wp_enqueue_scripts', 'makoh_theme_register_styles');



function makoh_theme_register_scripts() {

    wp_enqueue_script('makoh-theme-jquery',"https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), '3.4.1', true);
    wp_enqueue_script('makoh-theme-popper',"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), '1.16.0', true);
    wp_enqueue_script('makoh-theme-bootstrap',"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), '3.4.1', true);
    wp_enqueue_script('makoh-theme-main', get_template_directory_uri()."/assets/js/main.js", array(), '3.4.1', true);

}
add_action('wp_enqueue_scripts', 'makoh_theme_register_scripts');

?>