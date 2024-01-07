<?php
namespace Controllers;

use Models\AdminModel;

class CreateUserController
{

  private $adminModel;

  public function __construct($pdo)
  {
    $this->adminModel = new AdminModel($pdo);
  }


  public function signup()
  {

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $username = $_POST['username'];
      $email = $_POST['email'];
      $password = $_POST['password'];

      //validate and sanitize input 
      $username = $this->validateAndSanitizeUsername($username);
      $email = $this->validateAndSanitizeEmail($email);
      $password = $this->validateAndSanitizePassword($password);

      //call the signup method from the model
      $registred = $this->adminModel->signupUser($username, $email, $password);

      if ($registred) {

        // Registration successful
        // Redirect to login page

      } else {
        //Display signup form via call function
        $this->admin_construct();
      }

    }

  }


  private function validateAndSanitizeUsername($username)
  {
    //Ensuring it contains only letters and numbers
    return preg_replace("/[^a-zA-Z0-9]/", "", $username);
  }

  private function validateAndSanitizeEmail($email)
  {
    //using filter_var function to verify email
    return filter_var($email, FILTER_SANITIZE_EMAIL);
  }

  private function validateAndSanitizePassword($password)
  {
    //enforce minimum length and use htmlentities
    $minlength = 8;
    $password = htmlentities($password, ENT_QUOTES, 'UTF-8');

    if (strlen($password) < $minlength) {
      //redirect with an error message
    }
    return $password;
  }

  public function admin_construct()
  {
    $this->render('SignUp/signup.php');
  }

  private function render($view, $data = [])
  {
    include(__DIR__ . "/../../adminResources/views/$view");

  }
}