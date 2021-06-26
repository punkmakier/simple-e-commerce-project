<?php
    class adminLogin extends config{
        public $adminUser;
        public $adminPass;


        public function __construct($adminUser,$adminPass)
        {
            $this->adminUser = $adminUser;
            $this->adminPass = $adminPass;
        }

        public function AdminLoggingIn()
        {
            $con = $this->connection();
            $sqlQuery = "SELECT * FROM `adminaccount` WHERE `admin_user` = '$this->adminUser' AND `admin_pass` = '$this->adminPass'";
            $data = $con->prepare($sqlQuery);
            $data->execute();
  
            $results = $data->fetchAll(PDO::FETCH_ASSOC);

            if($data->rowCount() > 0)
            {
                foreach($results as $result){
                    $_SESSION['adminUsername'] = $result['admin_user'];
                    $_SESSION['adminPassword'] = $result['admin_pass'];
                    $_SESSION['status'] = "valid";
                }
            
                return true;
            }
            else{
                $_SESSION['status'] = "invalid";
                return false;
            }
        }
    }

?>