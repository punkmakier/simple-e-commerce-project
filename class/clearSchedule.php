<?php 
    class clearSchedule extends config{

        public function deleteAllSched()
        {
            $con = $this->connection();
            $sqlQueryDelete = "TRUNCATE TABLE `deliveryschedule` ";
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