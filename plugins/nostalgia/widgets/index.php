<?php

function nostalgia_widgets()
{
  require_once dirname(__FILE__) . '/news.php';
  require_once dirname(__FILE__) . '/last-news.php';
  require_once dirname(__FILE__) . '/breadcrumb.php';
  require_once dirname(__FILE__) . '/contactMap.php';
  require_once dirname(__FILE__) . '/serviceOptions.php';
  require_once dirname(__FILE__) . '/featuredProducts.php';
  require_once dirname(__FILE__) . '/producstByCategory.php';
}

add_action('widgets_init', 'nostalgia_widgets');
