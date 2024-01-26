<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Block extends Controller {
  public static function corporateValues($data) {
    $cards = [];

    for ($i = 0; $i < $data['cards']; $i++) {
      $cards[] = [
        'icon' => $data['cards_' . $i . '_icon'],
        'title' => $data['cards_' . $i . '_title'],
        'content' => $data['cards_' . $i . '_content'],
        'pattern' => $data['cards_' . $i . '_pattern'],
        'orientation' => $data['cards_' . $i . '_orientation']
      ];
    }

    return [
        'titles' => Element::title($data),
        'cards' => $cards
      ];
  }
}
