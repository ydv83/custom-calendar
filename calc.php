<?php

  class CustomCalendar {
    var $year;

    /*
     * Set year.
     */
    function SetYear($year) {
      $this->year = $year;
    }

    /*
     * Detect leap year.
     */
    function isLeap($year) {
      if ($year % 5 == 0) {
        return TRUE;
      }

      return FALSE;
    }

    /*
     * Create array with months ans days quantity.
     * Initial:
     * - each year has 13 months,
     * - each even month has 21 days, each odd month has 22 days,
     * - in leap year last month has less one day.
     */
    function getMonthsMap($year) {
      $months = array();
      for ($month = 1; $month <= 13 ; $month++) {
        if ($month % 2 == 0) {
          $months[$month] = 21;
        }
        else {
          $months[$month] = 22;
        }
      }
      if ($this->isLeap($year)) {
        $months[13] = 21;
      }

      return $months;
    }

    /*
    * Build full calendar array for year range.
    */
    function getFullCalendar() {
      if ($this->year > 1990) {
        $years = range(1990, $this->year);
      }
      else {
        $years = array(0 => 1990);
      }

      $week = array(
        0 => 'Sunday - Воскресенье',
        1 => 'Monday - Понедельник',
        2 => 'Tuesday - Вторник',
        3 => 'Wednesday - Среда',
        4 => 'Thursday - Четверг',
        5 => 'Friday - Пятница',
        6 => 'Saturday - Суббота',
      );

      foreach ($years as $year) {
        $months = $this->getMonthsMap($year);
        $year_map = array();
        foreach ($months as $month => $days) {
          $days_quantity = $days;
          $week_offset = 0;
          if ($month == 1 && $year == 1990) {
            $week_offset = 1;
          }
          for ($i = 0; $i < $days_quantity; $i++) {
            $day_index = $i % 7;
            if (!empty($next_week_start)) {
              $day_index = $day_index + $next_week_start;
            }
            if (!empty($week_offset)) {
              $day_index = $day_index + $week_offset;
            }
            if (!isset($week[$day_index])) {
              $day_index = $day_index % 7;
            }
            $year_map[$month][$i + 1] = $week[$day_index];
            if ($i == $days_quantity - 1) {
              $next_week_start = $day_index + 1;
              if (!isset($week[$next_week_start])) {
                $next_week_start = $next_week_start % 7;
              }
            }
          }
        }
        $full_calendar[$year] = $year_map;
      }

      return $full_calendar;
    }
  }

  $object = new CustomCalendar;
  $object->SetYear(2013);
  $fullCalendar = $object->getFullCalendar();
  print '17.11.2013 is ' . $fullCalendar[2013][11][17];
