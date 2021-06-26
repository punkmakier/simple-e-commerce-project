<?php
    require_once 'init.php';
    require_once '../class/viewUserGender.php';

    $gender;
    while($results = mysqli_fetch_array($queryUserGender)) {
        $gender = $results['user_gender'];

    }

  

    if(isset($_SESSION['ID']))
    {
        $userid = $_SESSION['ID'];

        $viewuser = new viewUserUpdate($userid);
    }

    F_userValidatePage();
 

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
            <h1>Account Information</h1>
            </div>
            <div class="col-7 mt-4">
                <?php F_updateUserInfo();?>
            </div>
            <?php  pleaseUpdateAccountInfo();?>
        </div>
  
        

        <div class="row mt-3">
            <div class="col-md-2 mb-5">
            <div class="menu">
                <a href="homepage.php" style="text-decoration-line: none; ">Home</a><br><br>
                <a href="myaccount.php" style="text-decoration-line: none; color: #ff3b49;">Account Information</a><br><br>
                <a href="order.php" style="text-decoration-line: none; ">My Order</a><br><br>
                <a href="changepassword.php" style="text-decoration-line: none; ">Cancelled Order</a><br><br>
                <a href="purchaseHistory.php" style="text-decoration-line: none;">Purchase History</a><br><br>
                <a href="changepassword.php" style="text-decoration-line: none;">Change Password</a><br><br>
                <a href="userLogout.php" style="text-decoration-line: none;">Logout</a>
            </div>

            </div>
           

            <div class="col-md">
            <div class="myForms">
            <form action="myaccount.php" method="post">
                <div class="form-row ">
                    <div class="form-group col-md-6">
                    <label for="inputEmail4">Username</label>
                    <input  type="text" class="form-control" id="inputEmail4" value="<?php $viewuser->viewUsername();?>" readonly>
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputPassword4">Mobile Number</label>
                    <input name="userUserphone" type="number" class="form-control" id="inputPassword4" value="<?php  $viewuser->viewNumber();?>" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Email</label>
                    <input name="userUseremail" type="email" class="form-control" id="inputAddress"  value="<?php $viewuser->viewEmail();?>" >
                </div>
                <div class="form-group">
                    <label for="inputAddress2">Address</label>
                    <input name="userUseraddress" type="text" class="form-control" id="inputAddress2" value="<?php  $viewuser->viewAddress();?>">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputCity">Shoper's Name</label>
                    <input name="userUsershopersName" type="text" class="form-control" id="inputCity" value="<?php  $viewuser->viewShoperName();?>">
                    </div>
                    
                    <fieldset class="form-group mt-md-2 ml-md-5">
                    <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                    <div class="form-row">
                        <div class="col-md mr-4">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="genderRadio" id="gridRadios1" value="Male" <?php if($gender=="Male"){ echo "checked";}?>>
                            <label class="form-check-label" for="gridRadios1">Male</label>
                            </div>
                        </div>

                        <div class="col-md mr-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="genderRadio" id="gridRadios1" value="Female"  <?php if($gender=="Female"){ echo "checked";}?>>
                                <label class="form-check-label" for="gridRadios1">Female</label>

                            </div>
                        </div>

                        <div class="col-md">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="genderRadio" id="gridRadios1" value="Others" <?php if($gender=="Others"){ echo "checked";}?> >
                            <label class="form-check-label" for="gridRadios1">Others</label>
                            </div>
                        </div>
                    </div>
                </fieldset>
                </div>
                <br>
                <button name="userInfoUpdateBTN" type="submit" class="btn form-control btnCstm">Save</button>

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