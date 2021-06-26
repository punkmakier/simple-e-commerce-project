<?php

    class updateUserInfos extends config{
        public $userPhone;
        public $useremail;
        public $usergender;
        public $usershopname;
        public $useraddress;
        public $userID;


    
        public function __construct($userPhone,$useremail,$usergender,$usershopname,$useraddress,$userID)
        {

            $this->userPhone = $userPhone;
            $this->useremail = $useremail;
            $this->usergender = $usergender;
            $this->usershopname = $usershopname;
            $this->useraddress = $useraddress;
            $this->userID = $userID;
        }

        public function updateUserInfo()
        {
            $con = $this->connection();
            $sqlUpdate = "UPDATE `useraccounts` SET `user_phonenumber`= '$this->userPhone',`user_email`= '$this->useremail',
            `user_gender`= '$this->usergender' ,`shopers_name`= '$this->usershopname',`user_address`= '$this->useraddress'  WHERE `userID` = $this->userID ";
     
            $data = $con->prepare($sqlUpdate);

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