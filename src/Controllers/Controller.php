<?php

namespace Controllers;

interface IController
{
  public static function view(ControllerData $ControllerData);
}

class Controller implements IController
{
  public static function view(ControllerData $ControllerData)
  {
    $data = $ControllerData->getData();
    $controllerExtraData = $data['extraValues'];
    extract($data);
    if (count($controllerExtraData) > 0) extract($controllerExtraData);
    require VIEWS_PATH . "masterTemplate.php";
  }
}
