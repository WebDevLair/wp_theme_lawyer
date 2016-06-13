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