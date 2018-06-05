<?php

  class Car extends Story{

    private $location = "somewhere";
  //  public static $city = "Cincinnati";

  public static $states = [
    "MI",
    "IN",
    "IL",
    "WI"
  ];

    public function statement() {
      echo "<h2>{$this->company} {$this->name} has {$this->doors} doors and color {$this->color}</h2>";
      $this->store();
    }

    private function store(){
      echo "Sold at {$this->location}";
    }

    public static function city() {
      return  "somewhere";
    }

    public static function someStates(){
      foreach (self::$states as $state) {
        echo "<br>".$state;
      }
    }

    public function printCompanyYears(){
      return $this->companyYears;
    }
  }
?>
