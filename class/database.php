<?php 
    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "softybusiness";

    $connection = mysqli_connect($host, $user, $pass, $database);

    if(mysqli_connect_error())
    {
        echo 'Error unable to connect in server <br>';
        echo "Message: ".mysqli_connect_error().'<br>';
    }
   

?>