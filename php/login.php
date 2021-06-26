<?php
    session_start();
    require_once 'init.php';
    

    if(empty($_SESSION['User_access']) || $_SESSION['User_access'] === "invalid")
    {
        $_SESSION['User_access'] = "invalid";
    }
    else{
         header("Location: homepage.php");
    }

   
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css" style="text/css">
    <link rel="stylesheet" href="../css/userLoginStyle.css" style="text/css">
    <script src="https://kit.fontawesome.com/5caef3d764.js" crossorigin="anonymous"></script>
</head>
<body>
   
<header id="home">
        <div class="container-fluid-md pl-md-5 pr-md-5">

            <nav class="navbar navbar-expand-lg navbar-light cstm-nav">
                    <div class="imgLOGO">
                        <a href=""><img src="../images/1_softyLOGO.png"> <!-- logo here-->
                        </a>
                    </div>


                        <ul class="navbar-nav ml-md-auto">
                        
                        <li class="nav-item">
                            <a class="nav-link active" href="../index.php">Visit store</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">FAQ</a>
                        </li>
                        </ul>
                        
                    </div>
            </nav>
        </div>
    </header>



    <div class="mainBody">
        <div class="userForms">
            <form action="" method="post">
                <h1>Login</h1>
                <?php userLogin();?>

                    <div class="outerInput">
                        <div class="userInput">
                            <label for="inputState">Username</label><br>
                            <input pattern="[^'\x22]+" name="username" type="text" required>
                        </div>
                        <div class="userInput">
                            <label for="inputState">Password</label><br>
                            <input pattern="[^'\x22]+" name="password" type="password" required>
                        </div>
                    </div>

                    <button name="loginBTN" type="submit" class="form-control">Sign Up <i class="fas fa-sign-in-alt"></i></button><br>

                <div class="SignUp">
                    <span>Don't have an account?</span><br>
                    <a href="register.php">Sign Up</a>
                </div>

            </form>
        </div>
    </div>






    <script src="../js/bootstrap.min.js"></script>

</body>
</html>