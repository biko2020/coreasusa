<?php
namespace Controllers;

class ManutentionController
{
  public function index()
  {
    $this->render("Materiels/manutention.php");
  }
  private function render($view, $data = [])
  {
    $data = array_merge($data, ['lang' => $GLOBALS['lang']]);
    extract($data);

    include(__DIR__ . "/../../resources/views/$view");
  }
}