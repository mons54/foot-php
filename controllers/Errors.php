<?php
namespace Controllers;

class Errors extends Controller
{
  public function error404(): void
  {
    $this->render('views/404.php');
  }
}
