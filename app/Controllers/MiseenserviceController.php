<?php
namespace Controllers;

class MiseenserviceController
{
    public function index()
    {
        $this->render("Services/miseenservice.php");
    }
    private function render($view, $data = [])
    {
        $data = array_merge($data, ['lang' => $GLOBALS['lang']]);
        extract($data);

        include(__DIR__ . "/../../resources/views/$view");
    }
}