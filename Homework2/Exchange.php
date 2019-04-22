

<?php
  class Exchange{

    public $riel;
    public $dollar;
    public $calulate;

    public function setMoney($riel,$dollar,$calulate){
        $this->riel = $riel;
        $this->dollar = $dollar;
        $this->calulate = $calulate;
    }


    public function calculate($riel,$dollar){
        $calulate = $riel/$dollar;
        return $calulate;
    }

    public function getMoney(){
        echo "Your Money exchange is 12,000,000R and exchange to"." dollar is ".$this->calculate(12000000,4000)."$";
    }
}

$exchang = new Exchange();
$exchang ->getMoney();

?>