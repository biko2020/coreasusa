<?php
namespace Controllers;

class LocationController
{
  public function index()
  {
    $this->render("Solutions/location.php");
  }
  private function render($view, $data = [])
  {
    $data = array_merge($data, ['lang' => $GLOBALS['lang']]);
    extract($data);

    include(__DIR__ . "/../../resources/views/$view");
  }
}