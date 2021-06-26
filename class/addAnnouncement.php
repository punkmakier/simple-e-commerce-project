<?php 
    class addAnnouncement extends config{
        public $title;
        public $description;



        public function __construct($title,$description)
        {
            $this->title = $title;
            $this->description = $description;
        }

        public function addAnnounce()
        {
            $con = $this->connection();
            $sqlQuery = "INSERT INTO `announcement` (`title`,`description`) VALUES ('$this->title','$this->description')";
            $data = $con->prepare($sqlQuery);

   
            if($data->execute())
            {
                return true;
            }
            else{
                return false;
            }
            
        }


    }
?>