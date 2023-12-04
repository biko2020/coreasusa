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
        //Merge the $data array with $lang
        $data = array_merge($data, ['lang' => $GLOBALS['lang']]);
        extract($data);

        // include views directory
        include(__DIR__ . "/../../resources/views/$view");
    }

}
