<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Block extends Controller {
  public static function keyFigure($data) {
    return [
      'reverse' => $data['reverse'],
      'image' => Element::image($data['image'], '34.6vw'),
      'number' => $data['number'],
      'classic-content' => Component::classicContent($data),
    ];
  }
}
