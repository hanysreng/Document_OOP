
<?php

 include "Phors.php";
  class AEON implements Phors{

    public $totalMoney;
    public $payment;
    public $totalInt;


    public function payforAEON($borrow,$interest){
        echo $this->totalMoney="Total Money to pay for AEON = ".(($borrow*$interest/100)*12)."<br>";
        
     }
     public function paymentMonth($borrow,$interest){
        echo $this->payment="Money payment per every month = ".($borrow*$interest/100)."<br>";
        
     }
     public function totalInterest($interest){
        echo $this->totalInt="Total interest = ".(($interest/100)*12)."<br>";
        
     }
}

$aeon = new AEON();

$aeon->payforAEON(870,1.9);
$aeon->paymentMonth(870,1.9);
$aeon->totalInterest(1.9);
?>