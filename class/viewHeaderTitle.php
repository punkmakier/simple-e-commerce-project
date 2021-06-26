<?php 

    class viewHeaderTitle extends config
    {
        public function viewHeader()
        {
            $con = $this->connection();
            $sqlQuery = "SELECT * FROM `headertitle`";
            $data = $con->prepare($sqlQuery);
            $data->execute();
    
            $results = $data->fetchAll(PDO::FETCH_ASSOC);
    
            if($data->rowCount() > 0)
            {
                foreach($results as $result)
                {
                    echo $result['header_title']; 
                }
                return true;
            }

            else{
                return false;
            }
        }
    }
?>