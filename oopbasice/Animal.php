


<?php
   class Animal{
       public $name = "kiki";
       public $color = "black";
       public $typeOfAnimal;

       public function run(){
           return "run fast";
       }

       public function eat($food){
           return $food;
       }

       public function shout($shout, $cry){
           return $shout." ".$cry;
       }


   }// end class

   $dog = new Animal();
//    echo $dog->name;
//    echo "<br>";
//    echo $dog->color;
//    echo "<br>";

    echo $dog->typeOfAnimal = "have legs 4"."   ".$dog->run();

//    echo $dog->run(); 
   echo "<br>";
   echo $dog->eat = "eat  rice";

   echo "<br>";
   echo $dog->shout("Wof wof",  "Ho Ho");

   //    $bird = new Animal();
//    echo $bird->typeOfAnimal = "សត្វជើង​២";
?>