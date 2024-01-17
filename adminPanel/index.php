<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

try {

  //Load the autoload.php
  require_once __DIR__ . '/vendor/autoload.php';

  // Load environment variable
  require_once __DIR__ . '/env.php';

  //Include connection data file
  require_once __DIR__ . '/config/db_connection.php';
  require_once __DIR__ . '/app/Router.php';

  //  instatiate pdo from DataBase class
  $pdo = $database->getPdo();

  $adminrouter = new AdminRouter($pdo);

  $adminrouter->addAdminRoute('/coreasusa/adminPanel/', 'DashboardController');
  $adminrouter->addAdminRoute('/coreasusa/adminPanel/login', 'AuthController');
  $adminrouter->addAdminRoute('/coreasusa/adminPanel/signup', 'CreateUserController');

  $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

  include __DIR__ . '/adminResources/views/header.php';


  $adminrouter->dispatch($url);

} catch (Exception $e) {
  echo "Error", $e->getMessage();
}

