<?php

namespace App\Controllers;

use Sober\Controller\Controller;
use WP_Query;

class App extends Controller {
  public static function getPosts($limit = -1, $post_type = 'post', $exclude = [], $order_by = NULL, $order = 'ASC', $new_args = NULL) {
    $args = [
      'post_type' => $post_type,
      'posts_per_page' => $limit,
      'orderby' => $order_by,
      'order' => $order,
      'post__not_in' => $exclude
    ];

    if ($new_args) {
      foreach($new_args as $key => $value) {
        $args[$key] = $value;
      }
    }

    return new WP_Query($args);
  }
}
