<?php 
    class cancelOrder extends config{
        public $orderID;


        public function __construct($orderID)
        {
            $this->orderID = $orderID;
        }

        public function cancelorder()
        {
            $con = $this->connection();
            $sqlCancel = "UPDATE `orderproducts` SET `order_status`= 'Cancelled' WHERE `orderID` = '$this->orderID'";
            $data = $con->prepare($sqlCancel);
            if($data->execute())
            {
                return true;
            }
            else
            {
                return false;
            }
        }
    }

?>