<?php 
    class viewUserUpdate extends config{
        public $userID;


        public function __construct($userID)
        {
            $this->userID = $userID;
        }

        public function viewUsername()
        {
            $con = $this->connection();
            $sqlQueryDelete = "SELECT * FROM `useraccounts` WHERE userID = $this->userID";
            $data = $con->prepare($sqlQueryDelete);
            $data->execute();

            $results = $data->fetchAll(PDO::FETCH_ASSOC);
    
            if($data->rowCount() > 0)
            {
                foreach($results as $result)
                {
                    echo $result['user_name']; 
                }
                return true;
            }

            else{
                return false;
            }
        }


        public function viewNumber()
        {
            $con = $this->connection();
            $sqlQueryDelete = "SELECT * FROM `useraccounts` WHERE userID = $this->userID";
            $data = $con->prepare($sqlQueryDelete);
            $data->execute();

            $results = $data->fetchAll(PDO::FETCH_ASSOC);
    
            if($data->rowCount() > 0)
            {
                foreach($results as $result)
                {
                    echo $result['user_phonenumber']; 
                }
                return true;
            }

            else{
                return false;
            }
        }


        public function viewEmail()
        {
            $con = $this->connection();
            $sqlQueryDelete = "SELECT * FROM `useraccounts` WHERE userID = $this->userID";
            $data = $con->prepare($sqlQueryDelete);
            $data->execute();

            $results = $data->fetchAll(PDO::FETCH_ASSOC);
    
            if($data->rowCount() > 0)
            {
                foreach($results as $result)
                {
                    echo $result['user_email']; 
                }
                return true;
            }

            else{
                return false;
            }
        }


        public function viewGender()
        {
            $con = $this->connection();
            $sqlQueryDelete = "SELECT * FROM `useraccounts` WHERE userID = $this->userID";
            $data = $con->prepare($sqlQueryDelete);
            $data->execute();

            $results = $data->fetchAll(PDO::FETCH_ASSOC);
    
            if($data->rowCount() > 0)
            {
                foreach($results as $result)
                {
                    $_SESSION['Usergender'] = $result['user_gender'];
                }
                return true;
            }

            else{
                return false;
            }
        }

        
        public function viewShoperName()
        {
            $con = $this->connection();
            $sqlQueryDelete = "SELECT * FROM `useraccounts` WHERE userID = $this->userID";
            $data = $con->prepare($sqlQueryDelete);
            $data->execute();

            $results = $data->fetchAll(PDO::FETCH_ASSOC);
    
            if($data->rowCount() > 0)
            {
                foreach($results as $result)
                {
                    echo $result['shopers_name']; 
                }
                return true;
            }

            else{
                return false;
            }
        }


        
        public function viewAddress()
        {
            $con = $this->connection();
            $sqlQueryDelete = "SELECT * FROM `useraccounts` WHERE userID = $this->userID";
            $data = $con->prepare($sqlQueryDelete);
            $data->execute();

            $results = $data->fetchAll(PDO::FETCH_ASSOC);
    
            if($data->rowCount() > 0)
            {
                foreach($results as $result)
                {
                    echo $result['user_address']; 
                }
                return true;
            }

            else{
                return false;
            }
        }



    }



?>