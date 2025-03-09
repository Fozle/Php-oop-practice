<?php
class car{
    public $name ="Car Name";
   public function getNewCar() {

    return $this->name;
   }
}

$bmw = new car();
$bmw->name = "BMW Car";
echo $bmw->name;