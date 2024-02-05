<?php
namespace Controllers;

use \Model\AdminModel;

class CreateUserController
{

  private $adminModel;

  public function __construct($pdo)
  {
    // intantiate a Model
    $this->adminModel = new AdminModel($pdo);
    $this->handelRequest();

  }


  public function handelRequest()
  {

    // call getUserData
    $this->getUserData();

  }

  // private function getUserData()
  // {

  //   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  //     $username = $_POST['username'];
  //     $email = $_POST['email'];
  //     $password = $_POST['password'];

  //     //validate and sanitize input 
  //     $username = $this->validateAndSanitizeUsername($username);
  //     $email = $this->validateAndSanitizeEmail($email);
  //     $password = $this->validateAndSanitizePassword($password);

  //     // validation errors
  //     $errors = $this->validateInputs($username, $email, $password);


  //     //call the signupUser method from the model
  //     $registred = $this->adminModel->createUser($username, $email, $password);

  //     if ($registred) {

  //       // Registration successful
  //       // Redirect to login page
  //       header("Location: /coreasusa/adminPanel/login");
  //       exit();

  //     } else {
  //       //Display signup form via call function
  //       $this->admin_construct(['Erreur d \'Enregistrement ']);
  //     }

  //   }

  // }
  private function getUserData()
  {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      // Get user input from the form
      $username = $_POST['username'];
      $email = $_POST['email'];
      $password = $_POST['password'];

      //validate and sanitize input
      $username = $this->validateAndSanitizeUsername($username);
      $email = $this->validateAndSanitizeEmail($email);
      $password = $this->validateAndSanitizePassword($password);

      // Validate inputs 
      $errors = $this->validateInputs($username, $email, $password);
     

      if (!empty($errors)) {
        // Render the template with error messages
        $this->admin_construct($errors);
        exit();
       
   } else {
        // No errors, create the user
        $this->adminModel->createUser($username, $email, $password);

   
        // Optionally, you can redirect the user to a success page or perform other actions.
         header("Location: /coreasusa/adminPanel/login");
         exit();
      }
    }
  }


  private function validateInputs($username, $email, $password)
  {
    $errors = [];

    //   //validation username rules 
    //   if (strlen($username) < 3) {
    //     $errors[] = 'le nom de doit avoir plus de trois caractères. ';
    //   } 

    if ($this->adminModel->checkEmailTaken($email)) {
      $errors[] = 'Email déja existant.';
    }

    // if ($password) {
    //     $errors[] = 'Error message for password validation';
    // }

    return $errors;
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

  public function admin_construct($errors = [])
  {
    
    $this->render('SignUp/signup.php', ['errors' => $errors]);

  }

  private function render($view, $data = [])
  {
  
    include(__DIR__ . "/../../adminResources/views/$view");

  }
}