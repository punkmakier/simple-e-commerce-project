<?php 
    require_once 'database.php';

    $queryClothing = "SELECT * FROM `products` WHERE product_type = 'Clothing' ";
    $queryClothing = mysqli_query($connection,$queryClothing);

?>