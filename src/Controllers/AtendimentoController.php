<?php

namespace Controllers;

use helpers\SlugHelper;

class AtendimentoController extends Controller
{
  public function show($selectedDate)
  {
    $selectedDateDateSeparatedByForwardSlash = str_replace('-', '/', $selectedDate);
    $today = SlugHelper::dateToSlug();
    [$day, $month, $year] = explode('-', $today);
    $dateInputMaxDate = "{$year}-{$month}-{$day}";

    [$selectedDay, $selectedMonth, $selectedYear] = explode('-', $selectedDate);
    $dateInputDefaultValue = "{$selectedYear}-{$selectedMonth}-{$selectedDay}";

    $data = [
      'title' => 'Atendimento - DogCat Banho e Tosa',
      'view' => 'atendimento',
      'selectedDate' => $selectedDateDateSeparatedByForwardSlash,
      'dateInputMaxDate' => $dateInputMaxDate,
      'dateInputDefaultValue' => $dateInputDefaultValue
    ];

    $this->view($data);
  }
}
