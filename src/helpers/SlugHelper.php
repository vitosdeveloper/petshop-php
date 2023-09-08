<?php

namespace helpers;

class SlugHelper
{
  static function dateToSlug()
  {
    $today = DateHelper::getDateByDDMMYYYYFormat();
    return str_replace(' ', '-', $today);
  }
}
