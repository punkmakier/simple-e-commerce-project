<?php 
    class deleteSchedule extends config{
        public $idSelected;


        public function __construct($idSelected)
        {
            $this->idSelected = $idSelected;
        }

        public function deleteSchedById()
        {
            $con = $this->connection();
            $sqlQueryDelete = "DELETE FROM `deliveryschedule` WHERE id = $this->idSelected";
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