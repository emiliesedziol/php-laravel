<?php

  class Honda extends Car {
    public $company = "Honda";
    public $companyYears = 34;

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
      // echo "<br> carTotal ";
      echo $this->inventory->carTotal($this->company, 4);
      // echo "<br> carsSold ";
      echo $this->inventory->carsSold("4");
    }

    // can only be used in this class
    protected function store() {
      echo " Sold at a Honda dealership";

    }
  }

?>
