<?php

function nostalgia_widgets()
{
  require_once dirname(__FILE__) . '/news.php';
}

add_action('widgets_init', 'nostalgia_widgets');
