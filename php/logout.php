<?php 
    session_start();
    session_unset('adminUsername');
    session_unset('adminPassword');
    session_unset('status');
    session_destroy();
    header('Location: adminLoginPage.php?logoutsuccess');
?>