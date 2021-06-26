<?php 

    class adminChangePassword extends config{
        public $password;



        public function __construct($password)
        {
            $this->password = $password;
        }


        public function adminChangePass()
        {
            $con = $this->connection();
            $sqlUpdate = "UPDATE `adminaccount` SET `admin_pass`='$this->password' WHERE id = 1 ";
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