<?php 

namespace App\Controller;

use App\Controller\AppController;
use Cake\Routing\Router;

class HomeController extends AppController {
  public function initialize(): void {
    parent::initialize(); // initialize AppController constructor

    // set custom layout globally
    $this->viewBuilder()->setLayout("custom/layout");

    $this->base_url = Router::url("/", true);
    $this->set("base_url", $this->base_url);
  }

  public function sayHello() {
    // sending parameters from action controller to view file
    $this->set("title", "Say hello page");

    echo $this->base_url;
    echo "Here";

    $name = "Daniel";
    $email = "danielwetan.io@gmail.com";
    $this->set("name", $name);
    $this->set("email", $email);

    $user = array(
      "name" => "Adam",
      "email" => "adam@mail.com"
    );
    $this->set("user", $user);

    $name2 = "Rizal";
    $email2 = "rizal@mail.com";
    $user2 = array(
      "name" => "Idris",
      "email" => "idris@mail.com"
    );

    // sending paramater to view using compact method
    $this->set(compact("name2", "email2"));
    $this->set(compact("user2"));


    // $this->autoRender = false;
    // echo "This is our first action method";
  }

  public function say() {
    $this->autoRender = false;
    echo "Hello World! <br>";
    echo $this->base_url;

  }

  public function sayWelcomeHello() {
    // Home/say_welcome_hello.php 
    // $this->autoRender = false;
    // echo "Welcome"; 
  }

  public function sayWelcome() {
    // say_welcome.php
    // echo $this->element('jumbotron');
    $this->viewBuilder()->setLayout("custom/layout");
  }

  public function myTrail() {
    // my_trail.php 
  }

  public function dashboard() {
    
  }

  public function myMessage() {
    // my_message.php
    // Flash method usage
    $this->Flash->set("This is my first message");
    $this->Flash->success("Success!", [
      "key" => "flash",
    ]
    
  );
    $this->Flash->error("Error!");
    $this->Flash->sayHello("Hello Flash!", [
      "params" => [
        "name" => "Daniel",
        "email" => "daniel@mail.com"
      ]
    ]); // custom flash methods
  }

  public function myUrl() {
    $this->set("message", "We are using URL helpers");
  }

  public function myForm() {
    // my_form.php
    $this->set("message", "We are using Form helpers");
  }
}
