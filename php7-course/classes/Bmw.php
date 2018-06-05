<?php


  class Bmw extends Car {
    public $company = "BMW";
    public $companyYears = 54;

    // dependency injection adding the class Invendory
    public function __construct($name, $doors, $color, $price, Inventory $inventory) {
      $this->name = $name;
      $this->doors = $doors;
      $this->color = $color;
      $this->price = $price;
      $this->inventory = $inventory;
    }

    public function price(){
      echo "<h3>The price of this {$this->company} {$this->name} is {$this->price} dollars</h3>";

      echo "<br>";
      echo $this->inventory->carTotal($this->company);
    }

    public function sportsPackage(){
      echo "<h4> This car is fully equiped</h4>";
    }
  }

?>
