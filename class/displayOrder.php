<?php 
    session_start();
    require_once 'database.php';

    $queryDisplay = "SELECT * FROM `orderproducts` WHERE `order_username` = '$_SESSION[User_username]' AND `order_status` = 'Pending' ORDER BY `id` DESC";
    $queryDisplay = mysqli_query($connection,$queryDisplay);

?>