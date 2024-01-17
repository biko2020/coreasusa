<?php

// database infos
$host = $_ENV['DB_HOST'] ?? 'localhost';
$username = $_ENV['DB_USER'] ?? 'root';
$password = $_ENV['DB_PASSWORD'] ?? '*****';
$database = $_ENV['DB_DATABASE'] ?? 'db_admin';

include __DIR__ . '/../config/dataBase.php';

// --- create instance of the DataBase class
$database = new DataBase($host, $username, $password, $database);

// connect to the databases
$database->connect();

// Get pdo object
$pdo = $database->getPdo();

include __DIR__ . '/../config/create_tables.php';

// --- create instance of TableCreator class
$tableCreator = new TableCreator($pdo);

// call creatTables methode
$tableCreator->createTables();



