<?php
    class registerValidation extends config{
        public $username;


        public function __construct($username){
            $this->username = $username;
        }

        public function validateUsername()
        {
            $con = $this->connection();
            $sql = "SELECT * FROM `useraccounts` WHERE `user_name` = '$this->username'";
            $data = $con->prepare($sql);
            $data->execute();
            $results = $data->fetchAll(PDO::FETCH_ASSOC);

            if($data->rowCount() > 0)
            {
                foreach($results as $result)
                {
                   $_POST['user'] = $result['user_name'];
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