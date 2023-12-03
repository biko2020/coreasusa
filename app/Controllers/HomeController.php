<?php

namespace Controllers;

class HomeController
{


    public function index()
    {

        // implentation logic 

        // Render the view
        $this->render('Home/home.php');

    }

    private function render($view, $data = [])
    {

        // Assuming views are in the 'resources/views' directory
        include(__DIR__ . "/../../resources/views/$view");
    }

}
