<?php
namespace Controllers;

class MaintenanceController
{
  public function index()
  {
    $this->render("Services/maintenance.php");
  }
  private function render($view, $data = [])
  {
    $data = array_merge($data, ['lang' => $GLOBALS['lang']]);
    extract($data);

    include(__DIR__ . "/../../resources/views/$view");
  }
}