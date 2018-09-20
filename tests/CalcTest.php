<?php
  use PHPUnit\Framework\TestCase;
  require_once 'calc.php';

  final class CustomCalendarTest extends TestCase {
    public function testYear() {
      $object = new CustomCalendar;
      $object->SetYear(2013);
      $this->assertInternalType('int', $object->year);
    }

    public function testLeapisLeap() {
      $object = new CustomCalendar;
      $this->assertTrue($object->isLeap(1990));
    }

    public function testNonLeapisLeap() {
      $object = new CustomCalendar;
      $this->assertFalse($object->isLeap(1991));
    }

    public function testMonthMap() {
      $object = new CustomCalendar;
      $this->assertCount(13, $object->getMonthsMap(1990));
    }

    public function testLeapMonthMap() {
      $object = new CustomCalendar;
      $monthMap = $object->getMonthsMap(1990);
      $this->assertEquals(21, $monthMap[13]);
    }

    public function testNonLeapMonthMap() {
      $object = new CustomCalendar;
      $monthMap = $object->getMonthsMap(1991);
      $this->assertEquals(22, $monthMap[13]);
    }

    public function testFullCalendar() {
      $object = new CustomCalendar;
      $object->SetYear(2013);
      $fullCalendar = $object->getFullCalendar();
      $this->assertNotEmpty($fullCalendar[2013][11][17]);
    }
  }
