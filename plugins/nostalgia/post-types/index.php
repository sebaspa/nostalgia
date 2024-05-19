<?php

function nostalgia_post_types()
{
  require_once dirname(__FILE__) . '/news.php';
}

add_action('init', 'nostalgia_post_types');
