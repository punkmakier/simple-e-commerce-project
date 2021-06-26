<?php 
    session_start();
    require_once 'database.php';

    $queryHistory = "SELECT * FROM `orderproducts` WHERE `order_username` = '$_SESSION[User_username]' AND (`order_status` = 'Complete' OR `order_status` = 'Cancelled' OR `order_status` = 'Denied') ORDER BY `id` DESC";
    $queryHistory = mysqli_query($connection,$queryHistory);

?>