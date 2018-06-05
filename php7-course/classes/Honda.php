<?php

  class Honda extends Car {
    public $company = "Honda";

    public function __construct($name, $doors, $color, $price,
          Inventory $inventory) {
      $this->name = $name;
      $this->doors = $doors;
      $this->color = $color;
      $this->price = $price;
      $this->inventory = $inventory;
    }

    public function price(){
      echo "<h3>The price of this {$this->company} {$this->name} is {$this->price}</h3>";
      $this->store();
      echo "<br>"; 
      echo $this->inventory->carTotal($this->company);
    }

    // can only be used in this class
    protected function store() {
      echo " Sold at a Honda dealership";

    }
  }

?>
