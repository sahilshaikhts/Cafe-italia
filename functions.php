<?php

add_filter('woocommerce_add_to_cart_redirect', 'wp_get_referer');

//Define and register menu items as custom post
function Register_customPost_menuIems()
{
    $labels = array(
        'name' => _x('Menu Items', 'post type general name', 'cafe-italia-theme'),
        'singular_name' => _x('Menu Item', 'post type singular name', 'cafe-italia-theme'),
        'menu_name' => _x('Menu Items', 'admin menu', 'cafe-italia-theme'),
        'name_admin_bar' => _x('Menu Item', 'add new on admin bar', 'cafe-italia-theme'),
        'add_new' => _x('Add New', 'menu item', 'cafe-italia-theme'),
        'add_new_item' => __('Add New Menu Item', 'cafe-italia-theme'),
        'new_item' => __('New Menu Item', 'cafe-italia-theme'),
        'edit_item' => __('Edit Menu Item', 'cafe-italia-theme'),
        'view_item' => __('View Menu Item', 'cafe-italia-theme'),
        'all_items' => __('All Menu Items', 'cafe-italia-theme'),
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'menu-item'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'editor', 'custom-fields'),
    );

    register_post_type('menu_item', $args);
}
//Initialize custom menu post
add_action('init', 'Register_customPost_menuIems');

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

//Include custom style
function RegisteryStyle()
{
    wp_enqueue_style('cafe_italia_style', get_template_directory_uri() . "/style.css", array(), '1.0', 'all');
    wp_enqueue_script('product-handler', get_template_directory_uri() . "/woocommerce/scripts/JS/product-handler.js", array(), null, false);
    wp_localize_script("product-handler", 'ajax_object', array('ajax_url' => admin_url('admin-ajax.php')));
}
add_action('wp_enqueue_scripts', 'RegisteryStyle');


//Remove wp header
function remove_admin_login_header()
{
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');

//Include file that handles cart related requests.
require(get_template_directory() . '/woocommerce/scripts/PHP/product-requests-handler.php');   




add_filter('woocommerce_locate_template', 'custom_checkout_template', 10, 3);

function custom_checkout_template($template, $template_name, $template_path) {
   global $woocommerce;

   if ($template_name == 'checkout/form-checkout.php') {
      $template = get_template_directory() . '/woocommerce/checkout-page.php';
   }

   return $template;
};
function custom_message_before_customer_details() {
    echo '<p>This is a custom message above the customer details section.</p>';
}
add_action('woocommerce_checkout_before_customer_details', 'custom_message_before_customer_details');

?>