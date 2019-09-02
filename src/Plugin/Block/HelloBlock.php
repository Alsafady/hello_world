<?php

namespace Drupal\hello_world\Plugin\Block;

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
  public function build() {


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
         $this->t('Day Name'),
         $this->t('Day Number'),
       ]
     ];

     foreach($days as $day) {
       $table[] = [
         'day_name' => [
           '#type' => 'markup',
           '#markup' => $day['day_name'],
         ],
         'day_no' => [
           '#type' => 'markup',
           '#markup' => $day['day_no'],
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
