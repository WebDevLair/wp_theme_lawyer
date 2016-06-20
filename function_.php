<?php
/**
 * Created by PhpStorm.
 * User: zyrab
 * Date: 13.06.16
 * Time: 00:56
 */

/* linked styles */
function enqueue_styles() {
    wp_enqueue_style( 'Lawyer-style', get_stylesheet_uri());
    wp_register_style('font-style', 'https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,cyrillic');
    wp_enqueue_style( 'font-style');
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

/* linked scripts */
function enqueue_scripts () {
    wp_register_script('html5-shim', 'http://html5shim.googlecode.com/svn/trunk/html5.js');
    wp_enqueue_script('html5-shim');
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

/* menus */
if (function_exists('add_theme_support')) {
    add_theme_support('menus');
}


/* wigets */

/* services */
register_services( array(
    'name' => __( 'Header Widget', 'twentyeleven-child' ),
    'id' => 'header-widget',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => "</div>",
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
) );