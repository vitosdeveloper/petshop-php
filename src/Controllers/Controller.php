<?php

namespace Controllers;

class Controller
{
  protected function view(array $data)
  {
    extract($data);
    require VIEWS_PATH . "masterTemplate.php";
  }
}
