<?php 
    require_once 'init.php';
 
   
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css" style="text/css">
    <link rel="stylesheet" href="../css/userRegisterStyle.css" style="text/css">
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
                <h1>Register</h1>
                <?php userRegister(); regInvalid();?>

                <div class="outerInput">
                    <div class="userInput">
                        <input pattern="[^'\x22]+"  name="reg_username" type="text" placeholder="Username" minlength="5" maxlength="20" size="20" required>
                    </div>
                    <div class="userInput">
                        <input  pattern="[^'\x22]+" name="reg_password" type="password" placeholder="Password" minlength="8" maxlength="30" size="30" required>
                    </div>
                    <div class="userInput">
                        <input pattern="[^'\x22]+" name="reg_confirmPass" type="password" placeholder="Confirm Password" minlength="8" maxlength="30" size="30" required>
                    </div>
                    <div class="userInput">
                    <input type="tel" id="phone" name="phoneNumb" placeholder="Phone number: Example 09111111111" pattern="[0-9]{11}" required><br>
          
                    </div>
                </div>
                
                <button name="signupBTN" type="submit" class="form-control" >Sign Up </button><br>
                <div class="SignUp">
                    <span>Already have an account?</span><br>
                    <a href="login.php">Sign In</a>
                </div>

            </form>
        </div>
    </div>



    <script src="../js/bootstrap.min.js"></script>



    <script>
        const myNum = document.getElementById("phoneNumb");
            myNum.addEventListener("keypress", function (e) {
                if (this.value.length == 11) {
                e.preventDefault();
                return false;
                }
            });
    </script>


</body>
</html>