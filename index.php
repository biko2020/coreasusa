<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

try {

  // ***  Load language file

  //language selector

  $selectedLanguage = isset($_GET['lang']) ? $_GET['lang'] : 'en';

  $langFile = __DIR__ . '/resources/lang/' . $selectedLanguage . '.php';

  if (file_exists($langFile)) {

    $lang = include $langFile;

  } else {
    // Add a default language file
    $langFile = __DIR__ . '/resources/lang/en.php';
    $lang = include $langFile;

  }

  //Load the autoload.php
  require_once __DIR__ . '/vendor/autoload.php';

  // Load the router
  require_once __DIR__ . '/app/Router.php';


  // Create a new instance of the router
  $router = new Router();

  // Define your routes
  $router->addRoute('/coreasusa/', 'HomeController');
  $router->addRoute('/coreasusa/services', 'ServicesController');
  $router->addRoute('/coreasusa/contact', 'ContactController');

  // Get the current URL without the base directory
  $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

  //Include navbar.php and pass $lang as parametre
  include __DIR__ . '/resources/views/navbar.php';

  // Dispatch the route
  $router->dispatch($url);
} catch (Exception $e) {
  echo "Error:", $e->getMessage();
}
