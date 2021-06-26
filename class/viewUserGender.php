<?php
    session_start();
    require_once 'database.php';

    $id =  $_SESSION['ID'];
    $queryUserGender = "SELECT * FROM `useraccounts` WHERE userID = $id";
    $queryUserGender = mysqli_query($connection,$queryUserGender);

?>