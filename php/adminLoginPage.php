<?php
    session_start();
    require_once 'init.php';



    if(empty($_SESSION['status']) || $_SESSION['status'] === "invalid")
    {
        $_SESSION['status'] = "invalid";
    }
    else{
         header("Location: adminPage.php");
    }

   
    


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css" style="text/css">
    <link rel="stylesheet" href="../css/adminLoginStyle.css" style="text/css">
    <script src="https://kit.fontawesome.com/5caef3d764.js" crossorigin="anonymous"></script>
</head>
<body>
      <div class="background">

            <div class="login-panel">
       
                <div class="heading mb-4">Login as Admin</div>
                <?php    logoutSuccess(); F_adminLogin();?>
                <div class="contain">
     
                    <form action="" method="post">
                            <div class="inner-form">
                                <div class="form-group">
                                    <input pattern="[^'\x22]+" type="text" name="username" id="userName" class="form-control"  required>
                                    <label  for="userName" class="user">Username</label>
                                </div>
                            </div>
                            <div class="inner-form">
                                <div class="form-group">
                                    <input  type="password" name="password" id="passWord" class="form-control"  required>
                                    <label for="passWord" class="user">Password</label>
                                </div>
                            </div>

                            <button type="submit" name="submit">Sign In <i class="fas fa-sign-in-alt"></i></button>
                    
                    </form>
                               
                </div>
            
                
            </div>
      </div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>