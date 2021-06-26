<?php
    class userLoginAccount extends config{

        public $username;
        public $password;


     


        public function __construct($username,$password)
        {
            $this->username = $username;
            $this->password = $password;

        }


        public function userLogin()
        {
            $con = $this->connection();
            $sqlInsert = "SELECT * FROM `useraccounts` WHERE `user_name` = '$this->username' AND `user_password` = '$this->password'";
            $data = $con->prepare($sqlInsert);
            $data->execute();

            $results = $data->fetchAll(PDO::FETCH_ASSOC);
            if($data->rowCount())
            {
                foreach($results as $result)
                {
                    $_SESSION['ID'] = $result['userID'];
                    $_SESSION['User_username'] = $result['user_name'];
                    $_SESSION['User_password'] = $result['user_password'];
                    $_SESSION['User_phone'] = $result['user_phonenumber'];
                    $_SESSION['User_email'] = $result['user_email'];
                    $_SESSION['User_address'] = $result['user_address'];
                    $_SESSION['User_access'] = "valid";
               
                }
                return true;
            }
            else
            {
                $_SESSION['User_access'] = "invalid";
                return false;
            }
        }
    }

?>