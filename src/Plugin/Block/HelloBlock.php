<?php

namespace Drupal\hello_world_example\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'HelloBlock' Block.
 *
 * @Block(
 *   id = "hello_block",
 *   admin_label = @Translation("Hello block"),
 *   category = @Translation("Hello World"),
 * )
 */
class HelloBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function hello_block() {


    $days = [
      ['day_name' => 'Sunday', 'day_no' => '1'],
      ['day_name' => 'Monday', 'day_no' => '2'],
      ['day_name' => 'Tuesday', 'day_no' => '3'],
      ['day_name' => 'Wednesday', 'day_no' => '4'],
      ['day_name' => 'Thursday', 'day_no' => '5'],
      ['day_name' => 'Friday', 'day_no' => '6'],
      ['day_name' => 'Saturday', 'day_no' => '7'],
    ];



    $table = [
       '#type' => 'table',
       '#header' => [
         $this->t('Day Number'),
         $this->t('Day Name'),
       ]
     ];

     foreach($days as $day) {
       $table[] = [
         'day_no' => [
           '#type' => 'markup',
           '#markup' => $day['day_no'],
         ],
         'day_name' => [
           '#type' => 'markup',
           '#markup' => $day['day_name'],
         ],
       ];
     }

     return $table;

/*
    return [
      '#markup' => $this->t('Hello, World!'),
    ];
*/


  }

}
