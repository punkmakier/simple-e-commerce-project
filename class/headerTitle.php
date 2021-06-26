<?php 
    class headerTitle extends config{
        public $headTitle;

        public function __construct($headTitle)
        {

            $this->headTitle = $headTitle;

        }

        public function addHeadTitle()
        {
            $con = $this->connection();
            $sqlQuery = "UPDATE `headertitle` SET `header_title`= '$this->headTitle' WHERE id = 1";
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