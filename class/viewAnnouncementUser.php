<?php 

    class viewAnnouncementUser extends config
    {
        public function viewAnnounceUser()
        {
            $con = $this->connection();
            $sqlQuery = "SELECT * FROM `announcement`";
            $data = $con->prepare($sqlQuery);
            $data->execute();
    
            $results = $data->fetchAll(PDO::FETCH_ASSOC);
    
            if($data->rowCount() > 0)
            {
                foreach($results as $result)
                {
                    echo "<h4 style = display: inline-block;> <img src='../images/icons/announcement_icon.png' >";
                    echo $result['title'];
                    echo "</h4>";
                    echo "<p>";
                    echo $result['description'];
                    echo "</p>";
                    echo "<span><small>";
                    echo "Date Posted: ".$result['datePosted'];
                    echo "</small></span>";

                }
                return true;
            }

            else{
                return false;
            }
        }
    }
?>