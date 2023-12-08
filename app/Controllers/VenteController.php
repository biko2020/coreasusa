<?php

namespace Controllers;

class VenteController
{
    public function index()
    {
        // implentation logic 
        // Render the view
        $this->render('Solutions/vente.php');
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
