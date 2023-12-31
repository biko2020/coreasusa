<?php
class Router
{
    private $routes = [];

    public function addRoute($url, $controller)
    {

        $this->routes[$url] = $controller;
    }

    public function dispatch($url)
    {
        $found = false;

        foreach ($this->routes as $route => $controller) {
            // Use regular expressions for more flexible URL matching
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
        //  controllers are in the 'Controllers' namespace
        $controllerClass = "Controllers\\" . $controller;

        // Convert namespace separator to directory separator
        $controllerClassPath = str_replace('\\', '/', $controllerClass);

        //  controllers are in the 'app' directory
        $controllerFile = __DIR__ . "/" . $controllerClassPath . ".php";

        if (file_exists($controllerFile)) {
            require_once $controllerFile;

            // Instantiate the controller and call a default method (index())
            $controllerInstance = new $controllerClass();

            $controllerInstance->index();
        } else {
            $this->notFound();
        }
    }




    private function notFound()
    {
        //  errors are in the 'Error' namespace
        include(__DIR__ . "/../resources/views/Error/not_found.php");
        exit; // Exit the script after displaying the not found page
    }
}
