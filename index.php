<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

// spl_autoload_register(function ($class) {
//   // Convert class name to file path
//   $classFile = __DIR__ . '/app/Controllers/' . str_replace('\\', '/', $class) . '.php';

//   // Check if the file exists before including it
//   if (file_exists($classFile)) {
//       include $classFile;
//   }
// });

//Load the autoload.php

require_once __DIR__ . '/vendor/autoload.php';

try {
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


  // Dispatch the route
  $router->dispatch($url);
} catch (Exception $e) {
  echo "Error:", $e->getMessage();
}
