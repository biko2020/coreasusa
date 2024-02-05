<?php
namespace Controllers;

use Model\AdminModel;

class AuthController
{

  private $adminModel;

  public function __construct($pdo)
  {
    $this->adminModel = new AdminModel($pdo);
  }

  public function login()
  {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $username = $_POST['username'];
      $password = $_POST['password'];

      //validate and sanitize input 

      //call the authenticateUser method from the model

      $authenticated = $this->adminModel->authenticateUser($username, $password);

      
      if ($authenticated) {
        //Authenticated successful
        //Redirect to admin managemant
      } else {
        //Authenticated faild
        //Dispaly error message or redirect to login page
      }

    } else {
      //Display login form via call admin_construct function
      $this->admin_construct();
    }
  }

  public function logout()
  {
    //Implement logout logic here
  }


  public function admin_construct()
  {

    $this->render('Login/login.php');
  }

  private function render($view, $data = [])
  {
    include(__DIR__ . "/../../adminResources/views/$view");

  }


}