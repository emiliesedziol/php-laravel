<?php

  class Inventory{
    public function carTotal($company) {
      $companies = [
        "BMW" => 240,
        "Honda" => 177
      ];

      return " Vehicles in inventory ".$companies[$company];
    }
  }
?>
