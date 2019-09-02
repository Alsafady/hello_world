<?php

namespace Drupal\hello_world\Controller;

//for t function we must use ControllerBase and extended in the class
use Drupal\Core\Controller\ControllerBase;

/**
 * Defines HelloController class.
 */
class HelloController extends ControllerBase {

  /**
   * Display the markup.
   *
   * @return array
   *   Return markup array.
   */
  public function hello() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Hello, World!'),
    ];
  }



  public function days() {
    $days = [
      ['name' => 'Sunday'],
      ['name' => 'Monday'],
      ['name' => 'Tuesday'],
      ['name' => 'Wednesday'],
      ['name' => 'Thursday'],
      ['name' => 'Friday'],
      ['name' => 'Saturday'],
    ];

    $allDays = '';
    foreach ($days as $day) {
      $allDays .= '<li>' . $day['name'] . '</li>';
    }

/* return in markup
    return [
      '#type' => 'markup',
      '#markup' => '<ol>' . $allDays . '</ol>' . '<h4>' . this->t('is a day.') . '</h4>',
    ];
*/


//return in theme (twig) .. this is the best practice.
return [
  '#theme' => 'hello_world',
  '#items' => $days,
  '#title' => $this->t('All Days!'),
];



  }




}
