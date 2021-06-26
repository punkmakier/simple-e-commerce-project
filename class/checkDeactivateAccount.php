<?php 
    class checkDeactivateAccount extends config{
        public $user;




        public function __construct($user){
            $this->user = $user;

        }

        public function checkAccount()
        {
            $con = $this->connection();
            $sqlShowAccount = "SELECT * FROM `useraccounts` WHERE `user_name` = '$this->user' AND `user_status` = 'Deactivate'";
            $data = $con->prepare($sqlShowAccount);
            $data->execute();

            $results = $data->fetchAll(PDO::FETCH_ASSOC);

            if($data->rowCount() > 0)
            {
                foreach($results as $result)
                {
                    echo $result['user_status'];
                }
                return true;
            }
            else{
                return false;
            }
        }
    }

?>