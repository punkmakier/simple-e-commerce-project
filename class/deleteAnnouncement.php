<?php 
    class deleteAnnouncement extends config{


        public function deleteAnnounce()
        {
            $con = $this->connection();
            $sqlQueryDelete = "TRUNCATE TABLE `announcement` ";
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