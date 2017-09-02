<?php

function add_theme_scripts() {
// enqueue parent styles
    wp_enqueue_style('parent-theme', get_template_directory_uri() . '/style.css');

    // enqueue child styles
//    wp_enqueue_style('stylesheet-css', get_stylesheet_directory_uri() . '/fonts/stylesheet.css');
    wp_enqueue_style('bootstrap-css', get_stylesheet_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('font-awesome-css', get_stylesheet_directory_uri() . '/css/font-awesome.min.css');
    wp_enqueue_style('owl-css', get_stylesheet_directory_uri() . '/css/owl.carousel.min.css');
    wp_enqueue_style('child-theme', get_stylesheet_directory_uri() . '/style.css', array('parent-theme'));
    wp_enqueue_style('responsive-css', get_stylesheet_directory_uri() . '/css/responsive.css');
//    wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/ce6e90379e.css');
    wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array(), '1', true);
    wp_enqueue_script('owl-js', get_stylesheet_directory_uri() . '/js/owl.carousel.min.js', array(), '1', true);
    wp_enqueue_script('coustom-js', get_stylesheet_directory_uri() . '/js/coustom.js', array(), '1', true);
}

add_action('wp_enqueue_scripts', 'add_theme_scripts');

function footer_theme_customizer($wp_customize) {
    $wp_customize->add_section('footer_customize', array(
        'title' => __('Footer Section', 'footer'),
        'priority' => 60,
        'description' => 'Customize your header here',
    ));
    $wp_customize->add_setting('footer_text');
    $wp_customize->add_control('footer_text', array(
        'label' => __('Title Text', 'footer'),
        'type' => 'textarea',
        'section' => 'footer_customize',
        'settings' => 'footer_text',
        'transport' => 'postMessage'
    ));
    $wp_customize->add_setting('btn_title');
    $wp_customize->add_control('btn_title', array(
        'label' => __('Button Text', 'footer'),
        'type' => 'textbox',
        'section' => 'footer_customize',
        'settings' => 'btn_title',
        'transport' => 'postMessage'
    ));
    $wp_customize->add_setting('btn_link');
    $wp_customize->add_control('btn_link', array(
        'label' => __('Button Link', 'footer'),
        'type' => 'textbox',
        'section' => 'footer_customize',
        'settings' => 'btn_link',
        'transport' => 'postMessage'
    ));
    $wp_customize->add_setting('twitter');
    $wp_customize->add_control('twitter', array(
        'label' => __('Twitter', 'footer'),
        'type' => 'textbox',
        'section' => 'footer_customize',
        'settings' => 'twitter',
        'transport' => 'postMessage'
    ));
    $wp_customize->add_setting('linkedin');
    $wp_customize->add_control('linkedin', array(
        'label' => __('linkedin', 'footer'),
        'type' => 'textbox',
        'section' => 'footer_customize',
        'settings' => 'linkedin',
        'transport' => 'postMessage'
    ));
    $wp_customize->add_setting('footerLogohome');
    $wp_customize->add_control('footerLogohome', array(
        'label' => __('Footer Logo Home', 'footer'),
        'type' => 'textbox',
        'section' => 'footer_customize',
        'settings' => 'footerLogohome',
        'transport' => 'postMessage'
    ));
    $wp_customize->add_setting('footerLogoinner');
    $wp_customize->add_control('footerLogoinner', array(
        'label' => __('Footer Logo Inner', 'footer'),
        'type' => 'textbox',
        'section' => 'footer_customize',
        'settings' => 'footerLogoinner',
        'transport' => 'postMessage'
    ));
}

add_action('customize_register', 'footer_theme_customizer');


register_sidebar(array(
    'name' => __('footer_contact', 'twentysixteen'),
    'id' => 'sidebar-7',
    'description' => __('Appears at the bottom of the content on posts and pages.', 'twentysixteen'),
));
register_sidebar(array(
    'name' => __('footer_blog', 'twentysixteen'),
    'id' => 'sidebar-8',
    'description' => __('Appears at the bottom of the content on posts and pages.', 'twentysixteen'),
));
register_sidebar(array(
    'name' => __('footer_sidebar', 'twentysixteen'),
    'id' => 'sidebar-9',
    'description' => __('Appears at the bottom of the content on posts and pages.', 'twentysixteen'),
));
