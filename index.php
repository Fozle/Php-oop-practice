<?php

class student{
    public $name;
    function set_Name($str){
        $this->name=$str;
    }
    function out_put(){
       return $this->name;
    }
}

$obj=new student();
$obj1=new student();
$obj->set_Name("Fozle Arafat 1");
echo $obj->out_put();
$obj1->set_Name("IOT STUdent");
echo "<br/>". $obj1->out_put();
?>