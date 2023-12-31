<?php
namespace Controllers;

class DashboardController
{

  public function index()
  {

    $this->render('Dashboard/admin.php');
  }

  private function render($view, $data = [])
  {
    include __DIR__ . "/../../adminResources/$view";
  }

}