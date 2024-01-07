<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

try {

  // require_once __DIR__ . '/vendor/autoload.php';

  require_once __DIR__ . '/app/Router.php';

  //Include data file
  require_once __DIR__ .'/config/create_tables.php';


  $adminrouter = new AdminRouter();

  $adminrouter->addAdminRoute('/coreasusa/adminPanel/', 'DashboardController');
  $adminrouter->addAdminRoute('/coreasusa/adminPanel/login', 'AuthController');
  $adminrouter->addAdminRoute('/coreasusa/adminPanel/signup','CreateUserController');

  $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

  include __DIR__ . '/adminResources/views/header.php';


  $adminrouter->dispatch($url);

} catch (Exception $e) {
  echo "Error", $e->getMessage();
}

