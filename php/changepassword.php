<?php
    session_start();
    require_once 'init.php';



  

 
 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 
    <link rel="stylesheet" href="../css/bootstrap.min.css" style="text/css">
    <link rel="stylesheet" href="../css/myaccountStyle.css" style="text/css">

    <script src="https://kit.fontawesome.com/5caef3d764.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid p-0 cstmContainer">
    <header></header>

    <div class="container">
    <div class="row">
            <div class="col">
                <h1>Change Password</h1>
            </div>
                <?php F_userChangePassword();?>
        </div>

        <div class="row mt-3">
            <div class="col-md-2 mb-5">
            <div class="menu">
            <a href="homepage.php" style="text-decoration-line: none; ">Home</a><br><br>
                <a href="myaccount.php" style="text-decoration-line: none;">Account Information</a><br><br>
                <a href="order.php" style="text-decoration-line: none; ">My Order</a><br><br>
                <a href="changepassword.php" style="text-decoration-line: none; ">Cancelled Order</a><br><br>
                <a href="purchaseHistory.php" style="text-decoration-line: none;">Purchase History</a><br><br>
                <a href="changepassword.php" style="text-decoration-line: none;  color: #ff3b49;">Change Password</a><br><br>
                <a href="userLogout.php" style="text-decoration-line: none;">Logout</a>
            </div>

            </div>
           

            <div class="col-md">
            <div class="myForms">
            <form method="post">
                
                <div class="form-group">
                    <label for="inputAddress">Current Password</label>
                    <input name="currentPassword" type="password" class="form-control" id="inputAddress" required>
                </div><br>
                <div class="form-group">
                    <label for="inputAddress">New Password Password</label>
                    <input name="passwordUser" type="password" class="form-control" id="inputAddress" required >
                </div>
                <div class="form-group">
                    <label for="inputAddress">Confirm Password</label>
                    <input name="passwordUserconfirm" type="password" class="form-control" id="inputAddress"  required >
                </div>
                <br>
                <button name="userInfoUpdateBTN" type="submit" class="btn changePassBtn">Change Password</button>

            </form>
            </div>
            </div>
        </div>
    </div>

        <footer>
            <div class="imgLOGO">
                <div class="contact">
                    <h4>Social Media</h4>
                    <a href="#">Facebook</a>
                    <a href="#">Messenger</a>

                </div>
                <div class="contact">
                    <h4>Address</h4>
                    <a href="https://www.google.com/maps/place/La+Almirah+Crest/@10.4080366,123.9841345,17z/data=!3m1!4b1!4m5!3m4!1s0x33a9bcd8250403bb:0x4593539460bd906f!8m2!3d10.4080366!4d123.9863232" target="blank">La Almirah Crest, Barangay Cogon Poblacion, Liloan, Cebu</a>

                </div>
                <div class="contact">
                    <h4>Service</h4>
                    <span>Deliver</span>
                    <span>Pick up</span>
                </div>
                            <a href="#home"><img src="../images/1_softyLOGO.png"> <!-- logo here-->
                            </a>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis fuga repellendus excepturi vel exercitationem impedit eaque possimus aperiam voluptatum ab voluptatibus soluta repellat sequi molestias, qui placeat reiciendis nisi quasi!</p>
                            <span>Copyright • Allright Reserve 2020</span>	&copy;
                        </div>
 
            </div>

  
        </footer>


        <script>
        const myNum = document.getElementById("inputPassword4");
            myNum.addEventListener("keypress", function (e) {
                if (this.value.length == 11) {
                e.preventDefault();
                return false;
                }
            });
    </script>
</body>
</html>