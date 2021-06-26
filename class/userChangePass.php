<?php 

    class userChangePass extends config{
        public $password;
        public $id;


        public function __construct($password,$id)
        {
            $this->password = $password;
            $this->id = $id;
        }


        public function userChangePassword()
        {
            $con = $this->connection();
            $sqlUpdate = "UPDATE `useraccounts` SET `user_password`='$this->password' WHERE userID = $this->id ";
            $data = $con->prepare($sqlUpdate);
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