<?php

namespace Controllers;

class HomeController
{


    public function index()
    {

        // You can perform any logic here if needed

        // Render the view
        $this->render('Home/home.php');

    }

    private function render($view, $data = [])
    {

        // Assuming views are in the 'resources/views' directory
        include(__DIR__ . "/../../resources/views/$view");
    }

}
