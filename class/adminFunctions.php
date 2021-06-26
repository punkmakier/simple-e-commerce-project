<?php 
    class adminFunctions extends config{

        public function displayTotalItems()
        {
            $con = $this->connection();
            $sqlTotalItems = "SELECT COUNT(`id`) AS `totalCountItems` FROM products";
            $data = $con->prepare($sqlTotalItems);
            $data->execute();
            $results = $data->fetchAll(PDO::FETCH_ASSOC);

            if($data->rowCount() > 0)
            {
                foreach($results as $result)
                {
                    echo $result['totalCountItems'];
                }
                return true;
            }
            else
            {
                return false;
            }
        }



        public function displayUserAccounts()
        {
            $con = $this->connection();
            $sqlTotalItems = "SELECT COUNT(`userID`) as `userCOUNT` FROM useraccounts";
            $data = $con->prepare($sqlTotalItems);
            $data->execute();
            $results = $data->fetchAll(PDO::FETCH_ASSOC);

            if($data->rowCount() > 0)
            {
                foreach($results as $result)
                {
                    echo $result['userCOUNT'];
                }
                return true;
            }
            else
            {
                return false;
            }
        }
        

        public function displayTotalAmount()
        {
            $con = $this->connection();
            $sqlTotalItems = "SELECT SUM(`total_amount`) AS `totalAMOUNT` FROM orderproducts WHERE `order_status`= 'Complete'";
            $data = $con->prepare($sqlTotalItems);
            $data->execute();
            $results = $data->fetchAll(PDO::FETCH_ASSOC);

            if($data->rowCount() > 0)
            {
                foreach($results as $result)
                {
                    echo $result['totalAMOUNT'];
                }
                return true;
            }
            else
            {
                return false;
            }
        }


        public function displayPendingCounts()
        {
            $con = $this->connection();
            $sqlTotalItems = "SELECT COUNT(`order_status`) AS `pendingCounts` FROM orderproducts WHERE `order_status` = 'Pending'";
            $data = $con->prepare($sqlTotalItems);
            $data->execute();
            $results = $data->fetchAll(PDO::FETCH_ASSOC);

            if($data->rowCount() > 0)
            {
                foreach($results as $result)
                {
                    echo $result['pendingCounts'];
                }
                return true;
            }
            else
            {
                return false;
            }
        }



        

        public function displayCompleteOrder()
        {
            $con = $this->connection();
            $sqlTotalItems = "SELECT COUNT(`order_status`) AS `completeOrder` FROM orderproducts WHERE `order_status` = 'Complete'";
            $data = $con->prepare($sqlTotalItems);
            $data->execute();
            $results = $data->fetchAll(PDO::FETCH_ASSOC);

            if($data->rowCount() > 0)
            {
                foreach($results as $result)
                {
                    echo $result['completeOrder'];
                }
                return true;
            }
            else
            {
                return false;
            }
        }


        public function displayCancelledOrder()
        {
            $con = $this->connection();
            $sqlTotalItems = "SELECT COUNT(`order_status`) AS `cancelOrder` FROM orderproducts WHERE `order_status` = 'Cancelled'";
            $data = $con->prepare($sqlTotalItems);
            $data->execute();
            $results = $data->fetchAll(PDO::FETCH_ASSOC);

            if($data->rowCount() > 0)
            {
                foreach($results as $result)
                {
                    echo $result['cancelOrder'];
                }
                return true;
            }
            else
            {
                return false;
            }
        }

        public function displayDeniedOrder()
        {
            $con = $this->connection();
            $sqlTotalItems = "SELECT COUNT(`order_status`) AS `deniedOrder` FROM orderproducts WHERE `order_status` = 'Denied'";
            $data = $con->prepare($sqlTotalItems);
            $data->execute();
            $results = $data->fetchAll(PDO::FETCH_ASSOC);

            if($data->rowCount() > 0)
            {
                foreach($results as $result)
                {
                    echo $result['deniedOrder'];
                }
                return true;
            }
            else
            {
                return false;
            }
        }
    }

?>