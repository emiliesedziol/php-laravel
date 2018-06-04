<?php


  class Bmw extends Car {
    public $company = "BMW";

    public function __construct($name, $doors, $color, $price) {
      $this->name = $name;
      $this->doors = $doors;
      $this->color = $color;
      $this->price = $price;
    }

    public function price(){
      echo "<h3>The price of this {$this->company} {$this->name} is {$this->price} dollars</h3>";
    }

    public function sportsPackage(){
      echo "<h4> This car is fully equiped</h4>";
    }
  }

?>
