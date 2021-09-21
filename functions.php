<?php

// add customizer.php file
require_once('templates/helpers/customizer.php');

function fn_theme_scripts()
{
    wp_enqueue_style('custom-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'fn_theme_scripts');

function fn_theme_supports()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'fn_theme_supports');
