<?php

namespace Drupal\hello_world;

use Drupal\Core\Entity\Query\QueryFactory;
use Drupal\Core\Entity\EntityManager;


/**
 * Our hello world service class.
 */
class HelloWorldServices {


  protected $say_something;
   public function __construct() {
     $this->say_something = 'Hello World!';
   }
   public function  sayHello($name = ''){
     if (empty($name)) {
       return $this->say_something;
     }
     else {
       return "Hello " . $name . "!";
     }
   }

   /*


     private $entityQuery;
     private $entityManager;

     public function __construct(QueryFactory $entityQuery, EntityManager $entityManager) {
       $this->entityQuery = $entityQuery;
       $this->entityManager = $entityManager;
     }


    */



  /**
   * Methood for getting Articles.
   */

   /*
  public function getAllArticles() {
    $articles = ['Hello World!', 'Get All Articles!'];

    return $articles;
  }


  public function getArticlesAndEQ() {
    $articleNids = $this->entityQuery->get('node')->condition('type', 'article')->execute();

    return $this->entityManager->getStorage('node')->loadMultiple($articleNids);
  }
*/



}
