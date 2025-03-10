<?php

class student{
    public $name;
  function __construct($str){
   $this->name = $str;
    
}


}

class classx extends student{
   #method
   function getName(){
      return $this->name;
   }
}

class classx1 extends student{
   function getName(){
      return $this->name;
   }
}

$obj = new classx("Fozle Arafat");
$obj1 = new classx1("Chowdhury");

echo "classx ". $obj->getName();
echo "<br/> Classx1 ". $obj1->getName();