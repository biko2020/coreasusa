<?php

namespace Controllers;

class ServicesController
{
    public function index()
    {
        // implentation logic 
        // Render the view
        $this->render('Services/services.php');
    }

    private function render($view, $data = [])
    {
        // the 'resources/views' directory
        include(__DIR__ . "/../../resources/views/$view");
    }
}
