
<?php
    interface Phors{
        public function payforAEON($borrow,$interest);
        public function paymentMonth($borrow,$interest);
        public function totalInterest($interest);
    }
?>