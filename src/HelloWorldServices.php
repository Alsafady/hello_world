<?php
use Drupal\Core\Database\Connection;
/**
 * Class HelloWorldServices.
 */
class HelloWorldServices implements DrupaliseMeInterface {
  /*
   * @var \Drupal\Core\Database\Connection $database
   */
  protected $database;

  /**
   * Constructs a new HelloWorldServices object.
   * @param \Drupal\Core\Database\Connection $connection
   */
  public function __construct(Connection $connection) {
    $this->database = $connection;
  }

  public function sayHello () {
    $query = $this->database->query('SELECT nid FROM {node}');
    $result = $query->fetchAssoc();
    return $result;
  }
}
