<?php
namespace Controllers;

class TractionController
{
  public function index()
  {
    $this->render("Materiels/traction.php");
  }
  private function render($view, $data = [])
  {
    $data = array_merge($data, ['lang' => $GLOBALS['lang']]);
    extract($data);

    include(__DIR__ . "/../../resources/views/$view");
  }
}

