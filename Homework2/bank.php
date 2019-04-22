

<?php

    class bank{

            protected $capital;
            protected $interest;
            protected $duration;
        
          public function CalulateInterest($capital,$duration){
             echo $this->interest="Mr.Vivord Rith must pay interest 1000$ for duration 365 days with capital 10000$ is: ".($duration*$capital*10/100)."$";

         } 
 
    
         }
   
?>