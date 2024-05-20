<?php

class breadcrumbWidget extends WP_Widget
{

  public function __construct()
  {
    parent::__construct(
      'breadcrumbWidget',
      __('breadcrumb', 'nostalgia'),
      array(
        'description' => __('Show and paginate breadcrumb', 'nostalgia')
      )
    );
  }

  public function widget($args, $instance)
  {

    function the_breadcrumb()
    {

      $breadcrumbs = array();

      // Get page ancestors
      $ancestors = get_ancestors(get_the_ID(), 'page');

      // Add homepage link
      $breadcrumbs[] = array(
        'link' => get_home_url(),
        'title' => 'Home'
      );

      // Add parent category links
      foreach ($ancestors as $ancestor) {
        $breadcrumbs[] = array(
          'link' => get_permalink($ancestor),
          'title' => __(get_the_title($ancestor), 'nostalgia')
        );
      }

      // Add current page title
      $breadcrumbs[] = array(
        'link' => '#',
        'title' => __(get_the_title(), 'nostalgia')
      );

      // Display breadcrumbs
      echo '<ul class="breadcrumbs">';
      foreach ($breadcrumbs as $breadcrumb) {
        if (isset($breadcrumb['link'])) {
          echo '<li><a href="' . esc_url($breadcrumb['link']) . '">' . esc_html($breadcrumb['title']) . '</a></li>';
        } else {
          echo '<li>' . esc_html($breadcrumb['title']) . '</li>';
        }
      }
      echo '</ul>';
    }


    the_breadcrumb();
  }
  public function update($new_instance, $old_instance)
  {
  }
  public function form($instance)
  {
  }
}


register_widget('breadcrumbWidget');
