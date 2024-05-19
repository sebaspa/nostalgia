<?php

$labels = array(
  'name' => _x('News', 'General name', 'nostalgia'),
  'singular_name' => _x('New', 'Singular name', 'nostalgia'),
  'menu_name' => __('News', 'nostalgia'),
  'name_admin_bar' => __('New', 'nostalgia'),
  'archives' => __('Item Archives', 'nostalgia'),
  'attributes' => __('Item Attributes', 'nostalgia'),
  'parent_item_colon' => __('Parent Item:', 'nostalgia'),
  'all_items' => __('All News', 'nostalgia'),
  'add_new_item' => __('Add new New', 'nostalgia'),
  'add_new' => __('Add new', 'nostalgia'),
  'new_item' => __('new New', 'nostalgia'),
  'edit_item' => __('Edit New', 'nostalgia'),
  'update_item' => __('Update New', 'nostalgia'),
  'view_item' => __('View New', 'nostalgia'),
  'view_items' => __('View News', 'nostalgia'),
  'search_items' => __('Search News', 'nostalgia'),
  'not_found' => __('No News found', 'nostalgia'),
  'not_found_in_trash' => __('No News found in the trash', 'nostalgia'),
  'featured_image' => __('Featured image', 'nostalgia'),
  'set_featured_image' => __('Add featured image', 'nostalgia'),
  'remove_featured_image' => __('Remove featured image', 'nostalgia'),
  'use_featured_image' => __('Use as featured image', 'nostalgia'),
  'insert_into_item' => __('Insert to News', 'nostalgia'),
  'uploaded_to_this_item' => __('Upload to New', 'nostalgia'),
  'items_list' => __('List of News', 'nostalgia'),
  'items_list_navigation' => __('Navigate to list of News', 'nostalgia'),
  'filter_items_list' => __('Filter list of News', 'nostalgia'),
);
$args = array(
  'label' => __('New', 'nostalgia'),
  'description' => __('New description', 'nostalgia'),
  'labels' => $labels,
  'supports' => array('title'),
  'taxonomies' => array('new-category'),
  'hierarchical' => false,
  'public' => false,
  'show_ui' => true,
  'show_in_menu' => true,
  'menu_position' => 6,
  'can_export' => true,
  'has_archive' => true,
  'exclude_from_search' => false,
  'publicly_queryable' => true,
  'map_meta_cap' => true,
  'query_var' => true,
  'rewrite' => array('slug' => 'new'),
  'menu_icon' => 'dashicons-testimonial',
  'show_in_rest' => false,
  'rest_base' => 'new'
);
register_post_type('new', $args);

/**
 * Images
 */

add_image_size('new-image', 410, 300, true);
