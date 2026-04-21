<?php

namespace App;

function support_theme()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ]);
    register_nav_menu('primary', __('Menu principal', 'theme_999'));
}

function register_assets()
{
    wp_enqueue_style(
        'theme-bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css',
        [],
        null
    );

    wp_enqueue_style(
        'theme-style',
        get_stylesheet_uri(),
        ['theme-bootstrap'],
        wp_get_theme()->get('Version')
    );

    wp_enqueue_script(
        'theme-bootstrap-script',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js',
        [],
        null,
        true
    );

    wp_enqueue_script(
        'splitting',
        'https://unpkg.com/splitting@1.0.6/dist/splitting.min.js',
        [],
        null,
        true
    );

    wp_enqueue_script(
        'theme-script',
        get_template_directory_uri() . '/script.js',
        ['splitting'],
        wp_get_theme()->get('Version'),
        true
    );
}

function theme_filter($title)
{
    return '' . $title;
}

add_action('after_setup_theme', 'App\support_theme');
add_action('wp_enqueue_scripts', 'App\register_assets');
add_filter('wp_title', 'theme_filter');
