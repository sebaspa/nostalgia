<?php

add_action('cmb2_admin_init', 'nostalgia_fields_new');

function nostalgia_fields_new()
{

  $prefix = 'nostalgia_fields_new_';

  $cmb = new_cmb2_box(
    array(
      'id' => $prefix . 'new',
      'title' => esc_html__('News', 'nostalgia'),
      'object_types' => array('new'),
      'context' => 'normal',
      'priority' => 'high',
      'show_names' => true,
    )
  );

  $cmb->add_field(
    array(
      'id' => $prefix . 'image',
      'name' => esc_html__('Image', 'nostalgia'),
      'desc' => esc_html__('Add an image.', 'nostalgia'),
      'type' => 'file',
      'attributes' => array(
        'required' => 'required',
        'accept' => 'image/*',
      ),
      'text' => array(
        'add_upload_file_text' => esc_html__('Add image', 'nostalgia'),
      ),
      'options' => array(
        'url' => false, // Hide the text input for the url
      ),
      'query_args' => array(
        'type' => 'image',
      ),
      'preview_size' => 'medium',
    )
  );

  $cmb->add_field(
    array(
      'id' => $prefix . 'category',
      'name' => esc_html__('Category', 'nostalgia'),
      'desc' => esc_html__('Select a category.', 'nostalgia'),
      'taxonomy' => 'new-category',
      'type' => 'taxonomy_select',
      'remove_default' => 'true', // Removes the default metabox provided by WP core.
      // Optionally override the args sent to the WordPress get_terms function.
      'query_args' => array(
        'orderby' => 'slug',
        'hide_empty' => false,
      ),
      'attributes' => array(
        'required' => 'required',
      ),
    )
  );

  $cmb->add_field(
    array(
      'id' => $prefix . 'shortDescription',
      'name' => esc_html__('Short Description', 'nostalgia'),
      'desc' => esc_html__('Write a short description.', 'nostalgia'),
      'default' => '',
      'sanitization_cb' => true,
      'type' => 'textarea_small',
      'attributes' => array(
        'required' => 'required',
      ),
    )
  );

  $cmb->add_field(
    array(
      'id' => $prefix . 'description',
      'name' => esc_html__('Description', 'nostalgia'),
      'desc' => esc_html__('Write a new.', 'nostalgia'),
      'default' => '',
      'sanitization_cb' => false,
      'type' => 'wysiwyg',
      'attributes' => array(
        'required' => 'required',
      ),
      'options' => array(
        'wpautop' => true,
        'media_buttons' => false,
        'textarea_rows' => get_option('default_post_edit_rows', 10),
        'teeny' => false,
        'dfw' => false,
        'quicktags' => true,
        'default_editor' => 'tinymce',
        'tinymce' => true,
      )
    )
  );

}
