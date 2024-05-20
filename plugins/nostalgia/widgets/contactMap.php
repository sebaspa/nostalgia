<?php

class contactMapWidget extends WP_Widget
{

  public function __construct()
  {
    parent::__construct(
      'contactMapWidget',
      __('contactMap', 'nostalgia'),
      array(
        'description' => __('Show contact map', 'nostalgia')
      )
    );
  }

  public function widget($args, $instance)
  {
    ?>
    <div id="contactMap" class="w-full h-[500px]"></div>
    <?php
  }
  public function update($new_instance, $old_instance)
  {
  }
  public function form($instance)
  {
  }
}


register_widget('contactMapWidget');
