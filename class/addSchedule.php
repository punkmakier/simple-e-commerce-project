<?php 
    class addSchedule extends config{
        public $deliveryDays;
        public $shipVia;
        public $startEndTime;



        public function __construct($deliveryDays,$shipVia,$startEndTime)
        {

            $this->deliveryDays = $deliveryDays;
            $this->shipVia = $shipVia;
            $this->startEndTime = $startEndTime;
        }

        public function addSched()
        {
            $con = $this->connection();
            $sqlQuery = "INSERT INTO `deliveryschedule` (`delivery_days`,`ship_via`,`start_end_time`) VALUES ('$this->deliveryDays','$this->shipVia','$this->startEndTime')";
            $data = $con->prepare($sqlQuery);

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