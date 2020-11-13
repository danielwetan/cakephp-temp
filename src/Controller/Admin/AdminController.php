<?php 

namespace App\Controller\Admin;

use Cake\Controller\Controller;

class AdminController extends Controller {
  public function adminLogin() {
    $this->autoRender = false;
    echo "Welcome to adminLogin page";
  }
  
  public function manageServices() {
    // $this->autoRender = false;
    // echo "Welcome to manageServices page";
  }

  public function productsList() {
    $this->autoRender = false;
    echo "Welcome to productsList page";
  }
}