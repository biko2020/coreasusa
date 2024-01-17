<?php

class TableCreator
{

  private $pdo;

  public function __construct(PDO $pdo)
  {
    $this->pdo = $pdo;
  }

  public function createTables()
  {

    try {

      // ***  Create  Tables for Authentication ***

      // -- Users Table
      $createUsersTable = "
    CREATE TABLE IF NOT EXISTS users (
      user_id INT PRIMARY KEY AUTO_INCREMENT,
      username VARCHAR(255) NOT NULL,
      email VARCHAR(255) NOT NULL,
      registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
  )
  ";

      // -- Credentials Table
      $createCredentialsTable = "
    CREATE TABLE IF NOT EXISTS credentials(
      user_id INT PRIMARY KEY,
      username VARCHAR(255) NOT NULL,
      password_hash VARCHAR(255) NOT NULL,
      FOREIGN KEY (user_id) REFERENCES users(user_id)
  )
  ";

      // -- Sessions Table
      $createSessionsTable = "
    CREATE TABLE IF NOT EXISTS sessions (
      session_id VARCHAR(255) PRIMARY KEY,
      user_id INT,
      expiry_timestamp TIMESTAMP,
      FOREIGN KEY (user_id) REFERENCES users(user_id)
  )
  ";

      // -- Roles and Permissions Table
      $createRolePermissionTable = "
    CREATE TABLE IF NOT EXISTS roles (
      role_id INT PRIMARY KEY,
      role_name VARCHAR(50) NOT NULL
  )
  ";

      // -- User Roles Table
      $createUserRoles = "
    CREATE TABLE IF NOT EXISTS user_roles (
      user_id INT,
      role_id INT,
      PRIMARY KEY (user_id, role_id),
      FOREIGN KEY (user_id) REFERENCES users(user_id),
      FOREIGN KEY (role_id) REFERENCES roles(role_id)
  )
  ";

      // -- Password reste Table
      $createPasswordReset = "
    CREATE TABLE IF NOT EXISTS password_reset (
      user_id INT,
      reset_token VARCHAR(255),
      expiry_timestamp TIMESTAMP,
      FOREIGN KEY (user_id) REFERENCES users(user_id)
  )
  ";

      // Execute the Queries

      $this->pdo->exec($createUsersTable);
      $this->pdo->exec($createCredentialsTable);
      $this->pdo->exec($createSessionsTable);
      $this->pdo->exec($createRolePermissionTable);
      $this->pdo->exec($createUserRoles);
      $this->pdo->exec($createPasswordReset);



      echo "Tables created successfuly!";

    } catch (PDOException $e) {
      die("Error creating tables: " . $e->getMessage());
    }

  }

}