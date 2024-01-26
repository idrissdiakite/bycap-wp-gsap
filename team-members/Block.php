<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Block extends Controller {
  public static function teamMembers($data) {
    $members = [];

    for ($i = 0; $i < $data['members']; $i++) {
      $members[] = [
        'image' => Element::image($data['members_' . $i . '_image'], '33vw'),
        'name' => $data['members_' . $i . '_name'],
        'position' => $data['members_' . $i . '_position'],
        'cursus' => $data['members_' . $i . '_cursus'],
        'quote' => $data['members_' . $i . '_quote'],
      ];
    }

    return [
        'classic-content' => Component::classicContent($data),
        'members' => $members
      ];
  }
}
