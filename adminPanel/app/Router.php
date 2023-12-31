<?php
class AdminRouter
{
  private $adminRoutes = [];
  public function addAdminRoute($url, $controller)
  {
    $this->adminRoutes[$url] = $controller;

  }

  public function dispatch($url)
  {
    $found = false;
    foreach ($this->adminRoutes as $route => $controller) {
      $pattern = "@^" . preg_quote($route, '@') . "$@";
      if (preg_match($pattern, $url)) {
        $found = true;
        $this->callController($controller);
        break;
      }
    }

    if (!$found) {
      $this->notFound();
    }

  }

  private function callController($controller)
  {
    $controllerClass = "Controllers\\" . $controller;
    $controllerClassPath = str_replace('\\', '/', $controllerClass);
    $controllerFile = __DIR__ . "/" . $controllerClassPath . ".php";

    if (file_exists($controllerFile)) {
      require_once $controllerFile;
      $controllerInstance = new $controllerClass();
      $controllerInstance->index();

    } else {
      $this->notFound();
    }

  }

  private function notFound()
  {
    include(__DIR__ . "/../adminResources/views/Error/not_found.php");
    exit;
  }

}