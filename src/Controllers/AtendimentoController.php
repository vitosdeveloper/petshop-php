<?php

namespace Controllers;

use helpers\SlugHelper;

class AtendimentoController
{
  public static function show(IController $Controller, $selectedDate)
  {
    $selectedDateDateSeparatedByForwardSlash = str_replace('-', '/', $selectedDate);
    $today = SlugHelper::dateToSlug();
    [$day, $month, $year] = explode('-', $today);
    $dateInputMaxDate = "{$year}-{$month}-{$day}";

    [$selectedDay, $selectedMonth, $selectedYear] = explode('-', $selectedDate);
    $dateInputDefaultValue = "{$selectedYear}-{$selectedMonth}-{$selectedDay}";

    $data = new ControllerData(
      'atendimento',
      'Atendimento - DogCat Banho e Tosa',
      [
        'jsFilename' => 'atendimento',
        'selectedDate' => $selectedDateDateSeparatedByForwardSlash,
        'dateInputMaxDate' => $dateInputMaxDate,
        'dateInputDefaultValue' => $dateInputDefaultValue
      ]
    );

    $Controller::view($data);
  }
}
