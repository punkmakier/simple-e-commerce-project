<?php 
    session_start();
    require_once 'database.php';

    $queryCancelled = "SELECT * FROM `orderproducts` WHERE `order_username` = '$_SESSION[User_username]' AND `order_status` = 'Cancelled' ";
    $queryCancelled = mysqli_query($connection,$queryCancelled);

?>