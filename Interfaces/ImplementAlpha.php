

<?php
   include "IMethodHolder.php";

   class IMplementAlpha implements IMethodHolder{
       public function getInfo($info){
           echo "This is NEWS!".$info."<br/>";
       }
       public function sendInfo($info){
           return $info;
       }

       public function calculate($first,$second){
           $calulate = $first+$second;
           return $calulate;
       }

       public function useMethods(){
           $this->getInfo("Today you win 1000000$");
           echo $this->sendInfo("Man UTD change new coach")."<br/>";
           echo "You make $".$this->calculate(90,120)."in your part-time job <br/>";
       }
   }
 $worker = new IMplementAlpha();
 $worker->useMethods();
   
?>