<?php 
    require_once 'database.php';

    $queryMore = "SELECT * FROM `products` WHERE product_type = 'More' ";
    $queryMore = mysqli_query($connection,$queryMore);

?>