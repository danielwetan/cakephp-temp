<?php 

namespace App\View\Cell; 
use Cake\View\Cell;

class DataCell extends Cell {

  public $developer;
  public function initialize(): void {
    $this->developer = array(
      "Daniel",
      "Adam",
      "Rizal",
      "Idris"
    );
  }

  // Need to define default display method
  public function display() {
    // We are going to return count of all values
    $this->set("dev_count", count($this->developer));
  }

  public function sayMessage($param) {
    // say_message.php
    $msg = "Welcome to CakePHP from sayMessage Cell + " . $param;
    $this->set("welcome_message", $msg);
  }

}