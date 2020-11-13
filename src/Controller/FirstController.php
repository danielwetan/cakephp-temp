<?php 

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Datasource\ConnectionManager; // import class for database connection

class FirstController extends Controller {

  public $connection;
  public function initialize(): void {
    $this->connection = ConnectionManager::get('default');
  }

  // Load database connection
  public function loadConnectionDetails() {
    $this->autoRender = false;
    echo "<pre>";
    print_r($this->connection);
  }

  public function firstRoute() {
    // $this->autoRender = false;
    echo "<h3>Hello from first route using scoped route builder</h3>";
  }

  public function secondRoute() {
    $this->autoRender = false;
    echo "<h3>Hello from second route using static method</h3>";
  }

  public function parameterRoute($id = null, $slug = null) {
    $this->autoRender = false;

    // $id = $this->request->getParam("id"); // get id param value
    $data = $this->request->getParam("pass"); // get pass param value
    // echo $id;
    print_r($data);
    // $params = $this->request->getAttribute("params"); // get all parameter from the route
    // print_r($params);
  }

  public function queryParams() {
    $this->autoRender = false;

    // get query param from url
    $params = $this->request->getQueryParams(); // get all param
    $id = $this->request->getQuery("id"); // get single param

    print_r($params["name"]);
    echo "<br>";
    echo $id;
  }
}

