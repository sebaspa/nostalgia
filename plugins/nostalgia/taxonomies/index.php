<?php

function nostalgia_taxonomies()
{
  require_once dirname(__FILE__) . '/new-category.php';
}

add_action('init', 'nostalgia_taxonomies');
