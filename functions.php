<?php
function modern_theme_enqueue_styles() {
    // Εγγραφή του βασικού CSS
    wp_enqueue_style('modern-style', get_stylesheet_uri());

    // Αν θέλουμε να προσθέσουμε custom CSS
    wp_enqueue_style('custom-styles', get_template_directory_uri() . '/assets/css/styles.css', array('modern-style'), '1.0');
}

add_action('wp_enqueue_scripts', 'modern_theme_enqueue_styles');

// Εγγραφή μενού
function modern_theme_register_menus() {
    register_nav_menus(array(
        'primary' => 'Primary Menu',
    ));
}

add_action('after_setup_theme', 'modern_theme_register_menus');
?>
