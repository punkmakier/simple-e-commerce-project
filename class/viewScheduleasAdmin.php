<?php 

    class viewScheduleasAdmin extends config
    {
        public function viewSched()
        {
            $con = $this->connection();
            $sqlQuery = "SELECT * FROM `deliveryschedule`";
            $data = $con->prepare($sqlQuery);
            $data->execute();
    
            $results = $data->fetchAll(PDO::FETCH_ASSOC);
    
            if($data->rowCount() > 0)
            {
                
                echo "<table class='table table-light table-striped'>";
                echo "<thead class='table-dark'>
                        <tr>
                            <th>Delivery Days</th>
                            <th>Ship Via</th>
                            <th>Start - End Time</th>
                            <th>Date Added</th>
                            <th>Action</th>
                        </tr>
                    </thead> <tbody>";
                
          
                foreach($results as $result){
                    echo "<tr>";
                    echo "<td>$result[delivery_days]</td>";
                    echo "<td>$result[ship_via]</td>";
                    echo "<td>$result[start_end_time]</td>";
                    echo "<td>$result[date_added]</td>";
                    echo "<td><a href='../php/deliverySchedule.php?deleteSched=$result[id]'"."class='btn btn-danger'>Delete</a></td>";
                    echo "</tr>";
                }
            
                echo "</tbody></table>";
                return true;
            }
            else{
                echo "<table class='table table-dark table-sm'>";
                    echo "<thead>
                        <tr>
                            <th>Delivery Days</th>
                            <th>Ship Via</th>
                            <th>Start - End Time</th>
                            <th>Date Added</th>
                            <th>Action</th>
                        </tr>
                    </thead>";
                echo "</table>";
                echo "<strong>No Schedule Yet</strong>";
                return false;
            }
        }
    }
?>