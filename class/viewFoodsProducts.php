<?php 

    class viewFoodsProducts extends config
    {
        public function viewPerfume()
        {
            $con = $this->connection();
            $sqlQuery = "SELECT * FROM `products` WHERE `product_type`='Foods'";
            $data = $con->prepare($sqlQuery);
            $data->execute();
    
            $result = $data->fetchAll(PDO::FETCH_ASSOC);
    
            if($data->rowCount() > 0)
            {
      
                
                echo "<table class='table table-light table-striped'>";
                echo "<thead class='thead-dark'>
                        <tr>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Stocks</th>
                            <th>Sub Invest</th>
                            <th>Short Description</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead> <tbody>";
                
          
                foreach($result as $result){
                    echo "<tr>";
                        echo "<td>$result[product_name]</td>";
                        echo "<td>$result[product_price]</td>";
                        echo "<td>$result[product_stock]</td>";
                        echo "<td>$result[total_invest]</td>";
                        echo "<td>$result[product_desc]</td>";
                        echo '<td><img src="../images/productImages/'.$result['product_picture'].'" width="75" height="75"></td>';

                        echo '<td><div class="btn-group dropleft">';
                            echo ' <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>';
                            echo ' <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">';
                                echo '<a class="dropdown-item" '."href='../php/editProducts.php?editProducts=$result[id]'".' >Edit</a>';
                                echo '<a class="dropdown-item"'."href='../php/products.php?delete=$result[id]'".' >Delete</a>';
                                
                            echo '</div>';
                        echo '</div></td>';
                  
                    echo "</tr>";
                }
            
                echo "</tbody></table>";

                return true;
            
                


           
          
            }

            else{
                echo "<table class='table table-dark table-sm '>";
                    echo "<thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Stocks</th>
                            <th>Sub Invest</th>
                            <th>Short Description</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>";
                echo "</table>";
                echo "<strong>No products</strong>";
                return false;
            }
        }
    }
?>