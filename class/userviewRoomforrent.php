<?php 
    require_once 'database.php';

    $queryRoomforrent = "SELECT * FROM `products` WHERE product_type = 'Room For Rent' ";
    $queryRoomforrent = mysqli_query($connection,$queryRoomforrent);

?>