<?php

if (!defined('VERSION')) {
  define('VERSION', '1.0.0');
}

function nostalgia_setup()
{
  load_theme_textdomain('nostalgia', get_template_directory() . '/languages');
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support(
    'html5',
    array(
      //'search-form',
      //'comment-form',
      //'comment-list',
      //'gallery',
      //'caption',
      //'style',
      //'script',
    )
  );

  register_nav_menus(
    array(
      'menu-1' => esc_html__('Primary', 'nostalgia'),
    )
  );

  add_theme_support('customize-selective-refresh-widgets');

  add_theme_support(
    'custom-logo',
    array(
      'width' => 190,
      'height' => 52,
      'flex-width' => true,
      'flex-height' => true,
    )
  );

  //add_image_size('product_thumbnail', 310, 350, true);

}

add_action('after_setup_theme', 'nostalgia_setup');



function nostalgia_styles_scripts()
{
  wp_enqueue_style('leaflet', 'https://unpkg.com/leaflet@1.9.4/dist/leaflet.css', array(), '1.9.4');
  wp_enqueue_script('leaflet', 'https://unpkg.com/leaflet@1.9.4/dist/leaflet.js', array(), '1.9.4', true);

  wp_enqueue_style('nostalgia-style', get_template_directory_uri() . '/dist/css/app.css', array('font-awesome'), VERSION);
  wp_enqueue_script('nostalgia-script', get_template_directory_uri() . '/dist/js/app.js', array('jquery', 'leaflet'), VERSION, true);
}

add_action('wp_enqueue_scripts', 'nostalgia_styles_scripts');


add_theme_support('woocommerce');

// Shop Item modifications start //
// Add custom fields to the product page
// Enqueue custom styles and scripts for custom fields
add_action('wp_enqueue_scripts', 'enqueue_custom_fields_assets');
function enqueue_custom_fields_assets() {
    if (is_product()) { // Only load on product pages
        wp_enqueue_style('custom-fields-css', get_stylesheet_directory_uri() . '/src/css/custom-fields.css');
        wp_enqueue_script('custom-fields-js', get_stylesheet_directory_uri() . '/src/js/custom-fields.js', array('jquery'), null, true);
    }
}

// Add custom fields to the product page
add_action('woocommerce_before_add_to_cart_button', 'add_custom_fields');
function add_custom_fields() {
    include __DIR__ . '/layouts/customFields/custom-fields.php';
}
// Shop Item modifications end //