

<?php 
include "AbstractPrefix.php";

   class ConcreteClass extends AbstractPrefix{
       public function prefixName($name,$separator="."){
           if($name=="Pacman"){
               $prefix="Mr";
           }elseif($name=="Pacwoman"){
               $prefix="Mrs";
           }else{
               $prefix="";
           }
           return "{$prefix}{$separator}{$name}";
       }
   }

   $class = new ConcreteClass;
   echo $class->prefixName("Pacman")."<br/>";
   echo $class->prefixName("Pacwoman");

?>