<?php

namespace Controllers;

class ContactController
{
    public function index()
    {
        // implentation logic 
        // Render the view
        $this->render('Contact/contact.php');
    }

    private function render($view, $data = [])
    {
        // the 'resources/views' directory
        include(__DIR__ . "/../../resources/views/$view");
    }
}
