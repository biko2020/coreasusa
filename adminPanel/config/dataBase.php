<?php

class DataBase
{

  private $host;
  private $username;
  private $password;
  private $database;
  private $pdo;

  public function __construct($host, $username, $password, $database)
  {

    $this->host = $host;
    $this->username = $username;
    $this->password = $password;
    $this->database = $database;

    $this->connect();

  }

  public function connect()
  {

    try {
      $this->pdo = new PDO("mysql:host={$this->host};charset=utf8", $this->username, $this->password);
      $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

      // Check if the database exists
      $query = "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = :database";
      $statement = $this->pdo->prepare($query);
      $statement->bindParam(':database', $this->database, PDO::PARAM_STR);
      $statement->execute();

      if (!$statement->fetch(PDO::FETCH_ASSOC)) {
        // If not, create it
        $this->createDatabase();
      }

      // Set the database to be used
      $this->setDatabase($this->database);

    } catch (PDOException $e) {
      die("Connection failed:" . $e->getMessage());
    }

  }

  public function getPdo()
  {
    return $this->pdo;
  }


  public function createDatabase()
  {

    // Create the database if it doesn't exist
    $createDatabaseQuery = "CREATE DATABASE IF NOT EXISTS $this->database";
    $this->pdo->exec($createDatabaseQuery);
  }

  public function setDatabase($database)
  {
    // set the database
    $this->database = $database;
    // Use the database
    $useDatabaseQuery = "USE $this->database";
    $this->pdo->exec($useDatabaseQuery);
  }

}
