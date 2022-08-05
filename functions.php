<?php 

function magicteacup_theme_support() {
    // Add dynamic title tag support
    add_theme_support('title-tag');

    // Add custom logo support
    add_theme_support('custom-logo');

    // Add featured image to posts
    add_theme_support('post_thumbnails');
}

add_action('after_setup_theme', 'magicteacup_theme_support');

// Function to initalize menu configuration in wp-admin
function magicteacup_menus() {
    $locations = array(
        'primary'   => "Main Menu",
        'footer'    => "Footer Menu"
    );
    
    register_nav_menus($locations);
}

add_action('init', 'magicteacup_menus');


// Enqueue site styles
function magicteacup_register_styles() {
    wp_enqueue_style('magicteacup-styles', get_template_directory_uri() . '/style.css', array('magicteacup-bootstrap'), wp_get_theme()->get('Version'), 'all');
    wp_enqueue_style('magicteacup-bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(), '4.4.1', 'all');
    wp_enqueue_style('magicteacup-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css', array(), '5.13.0', 'all');
}

add_action('wp_enqueue_scripts', 'magicteacup_register_styles');

// Enqueue site scripts
function magicteacup_register_scripts() {
    wp_enqueue_script('magicteacup-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', '3.4.1', 'all', true);
    wp_enqueue_script('magicteacup-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', '1.16.0', 'all', true);
    wp_enqueue_script('magicteacup-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', '4.4.1', 'all', true);
    wp_enqueue_script('magicteacup-main', get_template_directory_uri() . '/assets/js/main.js', wp_get_theme()->get('Version'), 'all', true);


}

add_action('wp_enqueue_scripts', 'magicteacup_register_scripts');

function magicteacup_widget_areas() {
    register_sidebar(
        array(
            'before_title'      => '',
            'after_title'       => '',
            'before_widget'     => '',
            'after_widget'      => '',
            'name'          => 'Sidebar Area',
            'id'            => 'sidebar-1',
            'description'   => 'Sidebar Widget Area'
        )
    );

    register_sidebar(
        array(
            'before_title'      => '',
            'after_title'       => '',
            'before_widget'     => '',
            'after_widget'      => '',
            'name'          => 'Footer Area',
            'id'            => 'footer-1',
            'description'   => 'Footer Widget Area'
        )
    );
}

add_action('widgets_init', 'magicteacup_widget_areas')

?>