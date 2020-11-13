<?php
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Datasource\ConnectionManager; // import class for database connection
use Cake\ORM\TableRegistry;
use DateTime;


class DatabaseController extends Controller {
  public $connection;
  public $usersTable;

  public function initialize(): void {
    // load db connection
    $this->connection = ConnectionManager::get('default');
    // load users table
    $this->usersTable = TableRegistry::getTableLocator()->get("Users");
    // prevent template render
    $this->autoRender = false;
  }

  public function connectionDetails() {
    echo "<pre>";
    print_r($this->connection);
  }

  // insert data into table 
  public function insert() {
    $data = $this->connection->insert("users", array(
      "id" => 3,
      "name" => "Daniel",
      "email" => "daniel@mail.com",
      "phone_no" => "08880",
      "created_at" => new DateTime('now')
    ), array(
      "created_at" => "datetime"
    ));

    echo "Insert success!";
    echo "<pre>";
    print_r($data);
  }

  // updata data from database
  public function update() {
    $this->connection->update("users", [
      "name" => "Adam",
      "email" => "adam@mail.com",
      "phone_no" => "9090",
    ], [
      "id" => 2,
    ]);

    echo "Update success!";
  }

  // delete data from database
  public function delete() {
    $this->connection->delete("users", [
      "id" => 3
    ]);

    echo "Delete success!";
  }

  // insert using ORM 
  public function ormInsert() {
    $query = $this->usersTable->query();
    $query->insert(["id", "name", "email", "phone_no", "created_at"])
    ->values([
      "id" => 3, // bug, we don't need to input id manually
      "name" => "Idris",
      "email" => "idris@mail.com",
      "phone_no" => "8007",
      "created_at" => new DateTime('now')
    ])
    ->execute();

    // we can also insert multiple values once
    // $query->insert(["id", "name", "email", "phone_no", "created_at"])->values([
    //   "id" => 4, // bug, we don't need to input id manually
    //   "name" => "Idris",
    //   "email" => "idris@mail.com",
    //   "phone_no" => "8007",
    //   "created_at" => new DateTime('now')
    // ])
    // ->values([
    //   "id" => 4, // bug, we don't need to input id manually
    //   "name" => "Idris",
    //   "email" => "idris@mail.com",
    //   "phone_no" => "8007",
    //   "created_at" => new DateTime('now')
    // ])
    // ->execute();
    
    echo "Insert using ORM success!";
  }

  public function ormUpdate() {
    $query = $this->usersTable->query();

    $query->update()->set([
      "name" => "New name",
      "email" => "new@mail",
    ])->where([
      "id" => 1
    ])->execute();

    echo "Update using ORM success!";
  }

  public function ormDelete() {
    $query = $this->usersTable->query();

    $query->delete()->where([
      "id" => 3
    ])->execute();

    echo "Delete using ORM success!";
  }

  public function ormGet() {
    // $result = $this->usersTable->find();
    // $result = $this->usersTable->find()->toList();
    $result = $this->usersTable->find()
    ->select(["id", "name", "email"]) // select only id, name and email
    ->where([
      "id >=" => 3 // where id >=3
    ])
    ->order([
      "id" => "DESC"
    ])
    ->toList();
    // ->first(); // select only first row
    
    echo "<pre>";
    print_r($result);

    // foreach ($result as $index => $value) {
    //   echo "Name: " . $value->name;
    //   echo "</br";
    // } 

  }

}