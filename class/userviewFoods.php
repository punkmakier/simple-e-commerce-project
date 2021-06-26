<?php 
    require_once 'database.php';

    $queryFoods = "SELECT * FROM `products` WHERE product_type = 'Foods' ";
    $queryFoods = mysqli_query($connection,$queryFoods);

?>