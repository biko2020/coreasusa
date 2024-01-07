<?php
namespace Models;

class AdminModel
{

  private $pdo;

  public function __construct($pdo)
  {
    $this->pdo = $pdo;
  }


  // Implement authenticationUser Method
  public function authenticateUser($username, $password)
  {
    try {

      //Statement to select data based on the username
      $stmt = $this->pdo->prepare("SELECT * FROM users WHERE username = :username");
      $stmt->bindParam(':username', $username);
      $stmt->execute();

      // Fetch the user data
      $user = $stmt->fetch(\PDO::FETCH_ASSOC);


      // Check if the user exists and stored hash password
      if ($user && password_verify($password, $user['password_hash'])) {

        // Authentication successful
        return true;

      } else {
        //Authentication failed
        return false;
      }


    } catch (\PDOException $e) {

      log($e->getMessage());

      return false;

    }

  }


  //Impelement signupUser Method
  public function signupUser($username, $email, $password)
  {
    try {

      //Hash password befor storing it
      $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

      // Start a transaction to ensure data consistency across tables
      $this->pdo->beginTransaction();

      //Statemant Insert data into users table
      $stmtUsers = $this->pdo->prepare("INSERT INTO users(username, email) VALUES (:username, :email)");
      $stmtUsers->bindParam(':username', $username);
      $stmtUsers->bindParam(':email', $email);

      //Execute the statement
      $stmtUsers->execute();

      //Retrive the auto-generated user_id form last insert
      $userId = $this->pdo->lastInsertId();

      //Statement Insert Data into credentials table
      $stmtCredentials = $this->pdo->prepare("INSERT INTO credentials(user_id, username, password_hash) VALUES(:user_id, :username, :password)");
      $stmtCredentials->bindParam(':user_id', $userId);
      $stmtCredentials->bindParam(':username', $username);
      $stmtCredentials->bindParam(':password', $hashedPassword);

      //Execute the statement
      $stmtCredentials->execute();

      //Commit the transaction if are successful
      $this->pdo->commit();

      return true;

    } catch (\PDOException $e) {

      //Rollback if transaction error
      $this->pdo->rollBack();
      return false;
    }

  }


}