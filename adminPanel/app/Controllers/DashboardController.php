<?php
namespace Controllers;

class DashboardController
{

  public function admin_construct()
  {

    $this->render('Dashboard/admin.php');
  }

  private function render($view, $data = [])
  {
    include(__DIR__ . "/../../adminResources/views/$view");

  }

}