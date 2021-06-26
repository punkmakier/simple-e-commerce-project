<?php 
    require_once 'database.php';

    $queryBeautyPro = "SELECT * FROM `products` WHERE product_type = 'Beauty Products' ";
    $queryBeautyPro = mysqli_query($connection,$queryBeautyPro);

?>