<?php
class Calculator {
  private $fnumber, $snumber;
  public function __construct( $Val1, $Val2 ) {
  $this->fnumber = $Val1;
  $this->snumber = $Val2;
  }
  public function addition() {
  return $this->fnumber + $this->snumber;
  }
  public function subtraction() {
  return $this->fnumber - $this->snumber;
  }
  public function multiplication() {
  return $this->fnumber * $this->snumber;
  }
  public function division() {
  return $this->fnumber / $this->snumber;
  }
  }
  $mycalculator = new Calculator(10, 10); 
  echo "The Addition of two number is = ". $mycalculator-> addition()."<br><br>";
  echo "The Subtraction of two number is = ". $mycalculator-> subtraction()."<br><br>";
  echo "The Multiplication of two number is = ". $mycalculator-> multiplication()."<br><br>";
  echo "The Division of two number is = ". $mycalculator-> division()."<br><br>";
  ?>