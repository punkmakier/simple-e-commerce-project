<?php 
    class userRegisterAccounts extends config{

        public $username;
        public $password;
        public $phoneNumb;
        public $shopName;


     


        public function __construct($username,$password,$phoneNumb,$shopName)
        {
            $this->username = $username;
            $this->password = $password;
            $this->phoneNumb = $phoneNumb;
            $this->shopName = $shopName;

        }


        public function userRegister()
        {
            $con = $this->connection();
            $sqlInsert = "INSERT INTO `useraccounts` (`user_name`,`user_password`,`user_phonenumber`,`shopers_name`) VALUES ('$this->username','$this->password','$this->phoneNumb','$this->shopName')";
            $data = $con->prepare($sqlInsert);
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