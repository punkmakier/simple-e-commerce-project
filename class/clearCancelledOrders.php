<?php 
    class clearCancelledOrders extends config{

        public function clearCancelled()
        {
            $con = $this->connection();
            $sqlQueryDelete = "DELETE FROM `orderproducts` WHERE `order_status` = 'Cancelled'";
            $data = $con->prepare($sqlQueryDelete);
            
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