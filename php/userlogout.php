<?php 
    session_start();
    session_unset('ID');
    session_unset('User_username');
    session_unset('User_password');
    session_unset('User_access');
    session_unset('User_phone');
    session_unset('User_email');
    session_unset('User_address');
    session_destroy();
    header('Location: ../index.php?logoutsuccess');
?>