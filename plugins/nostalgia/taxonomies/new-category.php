<?php

$labels = array(
  'name' => __('Categories', 'nostalgia'),
  'singular_name' => __('Category', 'nostalgia'),
  'search_items' => __('Search categories', 'nostalgia'),
  'all_items' => __('All categories', 'nostalgia'),
  'parent_item' => __('Parent category', 'nostalgia'),
  'parent_item_colon' => __('Parent category:', 'nostalgia'),
  'edit_item' => __('Edit category', 'nostalgia'),
  'update_item' => __('Update category', 'nostalgia'),
  'add_new_item' => __('Add new category', 'nostalgia'),
  'new_item_name' => __('New category name', 'nostalgia'),
  'menu_name' => __('Categories', 'nostalgia'),
);

$args = array(
  // Hierarchical taxonomy (like categories)
  'hierarchical' => true,
  // This array of options controls the labels displayed in the WordPress Admin UI
  'labels' => $labels,
  // Control the slugs used for this taxonomy
  'rewrite' => array(
    'slug' => 'new-category', // This controls the base slug that will display before each term
  ),
  'show_ui' => true,
  'show_admin_column' => true,
  'query_var' => true,
  'show_in_rest' => false,
  'rest-base' => 'new-category'
);

register_taxonomy('new-category', array('new'), $args);
