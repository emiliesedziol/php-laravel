<?php

  interface InventoryInterface{
    public function carsSold($numberOfCars);
  }

  class Inventory implements InventoryInterface{
    public function carTotal($company) {
      $companies = [
        "BMW" => 240,
        "Honda" => 177
      ];

      return " Vehicles in inventory ".$companies[$company];
    }

    public function carsSold($numberOfCars) {
      echo "<h2>number of cars sold today {$numberOfCars}</h2>";
    }
  }
?>
