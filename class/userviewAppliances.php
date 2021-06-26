<?php 
    require_once 'database.php';

    $queryAppliances = "SELECT * FROM `products` WHERE product_type = 'Appliances' ";
    $queryAppliances = mysqli_query($connection,$queryAppliances);

?>