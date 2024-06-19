<?php

function blackhole_customize_register() {
    // Register customizer sections, settings, and controls
   $wp_customize -> add_section('home_page_elements', array(
    
   ));

}


function blackhole_theme_support() {
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'blackhole_theme_support');

// function blackhole_paragraphs() {
//     add_filter('the_content', 'wpautop');
// }

// add_action('init', 'blackhole_paragraphs');

function blackhole_menus() {
    $locations = array(
        'primary' => 'Primary Menu',
        'footer' => 'Footer Menu',
    );

    register_nav_menus($locations);
}

add_action('init', 'blackhole_menus');

function blackhole_styles() {
    $css_version = filemtime(get_template_directory()."/style.css");
    // $para_css_version = filemtime(get_template_directory()."assets/css/style.css");
    wp_enqueue_style("blackhole-css", get_template_directory_uri()."/style.css", array('blackhole-fonts-gapis', 'blackhole-fonts-gstatic', 'blackhole-font-name'), $css_version, "all");
    wp_enqueue_style("blackhole-paragraph-styles", get_template_directory_uri()."assets/css/paragraph-styles.css", array(), "2.0", "all");
    wp_enqueue_style("blackhole-fonts-gapis", "https://fonts.googleapis.com", false);
    wp_enqueue_style("blackhole-fonts-gstatic", "https://fonts.gstatic.com", false);
    wp_enqueue_style("blackhole-font-name", "https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap", false);
}

add_action('wp_enqueue_scripts', 'blackhole_styles');

?>