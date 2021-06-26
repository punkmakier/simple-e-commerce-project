<?php
    session_start();

          
           if(empty($_SESSION['status']) || $_SESSION['status'] === "invalid")
           {
               $_SESSION['status'] = "invalid";
               header("Location: adminLoginPage.php");
           }
       
?>