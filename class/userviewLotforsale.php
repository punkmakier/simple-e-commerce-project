<?php 
    require_once 'database.php';

    $queryLotforsale = "SELECT * FROM `products` WHERE product_type = 'Lot For Sale' ";
    $queryLotforsale = mysqli_query($connection,$queryLotforsale);

?>