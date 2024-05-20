<?php

function nostalgia_widgets()
{
  require_once dirname(__FILE__) . '/news.php';
  require_once dirname(__FILE__) . '/breadcrumb.php';
  require_once dirname(__FILE__) . '/contactMap.php';
}

add_action('widgets_init', 'nostalgia_widgets');
