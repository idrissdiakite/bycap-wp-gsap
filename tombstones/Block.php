<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Block extends Controller {
  public static function lastTombstones($data) {
    $tombstones = App::getPosts(24, 'tombstone', [], 'menu_order')->posts;

    return [
        'classic-content' => Component::classicContent($data),
        'tombstones' => $tombstones
    ];
  }
}
