
<?php
include "Rectangular.php";
    class Area implements Rectangular{
        public $square;
        public $rectangular;
        public $circle;
        public function squareArea($corner){
           echo $this->square="Square area = ".$corner*$corner."<br>";
        }

        public function rectangularArea($height,$width){
           echo $this->rectangular="Rectangular area =".$height*$width."<br>";
         
        }

        public function circleArea($r){
            echo $this->circle="Rectangular area = ".$r*$r*3.14."<br>";
           
       }

    }

$calculateArea = new Area();


$calculateArea ->squareArea(5);
$calculateArea -> rectangularArea(5,6);
$calculateArea -> circleArea(5);


?>
