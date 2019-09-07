<?php

namespace Drupal\hello_world_example\Controller;

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
  public function hello_page() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Hello, World!'),
    ];
  }


  public function hello_page_admin() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Hello, World!'),
    ];
  }



  public function hello_page_with_permission_example() {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Hello, World!.. This is page for admin users only'),
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


//return in markup

/* 
    return [
      '#type' => 'markup',
      '#markup' => '<ol>' . $allDays . '</ol>' . '<h4>' . this->t('is a day.') . '</h4>',
    ];
*/




//return in theme (twig) .. this is the best practice.

/* */
return [
  '#theme' => 'hello_world_example',
  '#items' => $days,
  '#title' => $this->t('All Days!'),
];



  }


















}
