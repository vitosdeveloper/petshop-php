<?php

namespace Controllers;

class ControllerData
{
  public string $title;
  public string $view;
  public string $jsFilename;
  public array $extraValues;

  public function __construct(string $view, string $title, array $extraValues = [])
  {
    $this->view = $view;
    $this->title = $title;
    $this->extraValues = $extraValues;
  }

  public function getValues(): array
  {
    return (array) $this;
  }
}
