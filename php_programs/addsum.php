<?php

class AddTowNumber {
    public $a;
    public $b;
  
    function __construct($a , $b) {
      $this->a = $a;
      $this->b = $b;
    }
    function getSum() {
        $sum = $this->a + $this->b;
      return $sum;
    }
  }
  
  $total = new AddTowNumber(2,2);
  echo $total->getSum();



?>