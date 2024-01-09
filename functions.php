<?php

//Include custom style
function RegisteryStyle()
{
    wp_enqueue_style('cafe_italia_style', get_template_directory_uri() . "/style.css", array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'RegisteryStyle');


//Add Custom nav-menu
function Register_NavMenu()
{
    register_nav_menus(
        array(
            'primary-menu' => 'Nav menu',
            'footer-menu' => 'Footer menu'
        )
    );
}
add_action('after_setup_theme', 'Register_NavMenu');


//Configure automatic setting of title
function ThemeSupportConfig()
{
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'ThemeSupportConfig');


//Add woocommerece support
add_action('after_setup_theme', 'theme_add_woocommerce_support');
function theme_add_woocommerce_support()
{
    add_theme_support('woocommerce');
}


//Remove wp header
function remove_admin_login_header()
{
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');

add_action('woocommerce_before_cart', 'your_custom_function');
function your_custom_function() {
    echo '<h1>Tessssst</h1>';
}

?>