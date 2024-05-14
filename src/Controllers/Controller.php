<?php

namespace Controllers;

class Controller
{
  public static function view(ControllerData $data)
  {
    $controllerData = $data->getValues();
    $controllerExtraData = $controllerData['extraValues'];
    extract($controllerData);
    if (count($controllerExtraData) > 0) extract($controllerExtraData);
    require VIEWS_PATH . "masterTemplate.php";
  }
}
