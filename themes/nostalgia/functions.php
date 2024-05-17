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
  wp_enqueue_style('nostalgia-style', get_template_directory_uri() . '/dist/css/app.css', array('font-awesome'), VERSION);
  wp_enqueue_script('nostalgia-script', get_template_directory_uri() . '/dist/js/app.js', array('jquery'), VERSION, true);
}

add_action('wp_enqueue_scripts', 'nostalgia_styles_scripts');


add_theme_support('woocommerce');

