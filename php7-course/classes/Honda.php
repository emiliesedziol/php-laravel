<?php

  class Honda extends Car {
    public $company = "Honda";

    public function __construct($name, $doors, $color, $price) {
      $this->name = $name;
      $this->doors = $doors;
      $this->color = $color;
      $this->price = $price;
    }

    public function price(){
      echo "<h3>The price of this {$this->company} {$this->name} is {$this->price}</h3>";
    }
  }

?>
