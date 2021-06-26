<?php
    require_once 'init.php';
    require_once '../class/userPurchaseHistory.php';

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
            <h1>Purchase History</h1>
            </div>

        </div>
  
        

        <div class="row mt-3">
            <div class="col-md-2 mb-5">
            <div class="menu">
            <a href="homepage.php" style="text-decoration-line: none;">Home</a><br><br>
                <a href="myaccount.php" style="text-decoration-line: none;">Account Information</a><br><br>
                <a href="order.php" style="text-decoration-line: none;">My Order</a><br><br>
                <a href="cancelorder.php" style="text-decoration-line: none;">Cancelled Order</a><br><br>
                <a href="purchaseHistory.php" style="text-decoration-line: none;  color: #ff3b49;">Purchase History</a><br><br>
           
                <a href="changepassword.php" style="text-decoration-line: none;">Change Password</a><br><br>
                <a href="userLogout.php" style="text-decoration-line: none;">Logout</a>
            </div>

            </div>
           

            <div class="col-md">
            <div class="myForms">
                <!-- here -->
            <?php  
                     if($rowCount = mysqli_num_rows($queryHistory)>0){
            while($results = mysqli_fetch_array($queryHistory)) {?> 
                <div class="innerRow" style="border-left: 2px solid #ff3b49; padding: 0 10px; margin-bottom: 50px; background-color: rgba(155, 155, 155, 0.137); ">
                        <div class="form-row ">
                            <div class="form-group col-md-6">
                            <h5 for="inputEmail4"><?php echo $results['order_productType'];?></h5>
                            </div>
                            <div class="form-group col-md-6">
                            <label for="inputPassword4" style="float: right;">ORDER ID: <?php echo $results['orderID'];?></label>
                            </div>
                        </div>
                        <div class="form-row ">
                            <div class="form-group col-md-6">
                            <label for="inputEmail4"><strong><?php echo $results['order_productName'];?></strong></label>
                            </div>
                        </div>
                        <hr>
                        <div class="form-row ">
                            <div class="form-group col-md-3">
                            <label for="inputEmail4"><strong>Price:</strong> <span style="color: #ff3b49;">₱<?php echo $results['order_price'];?>.00</span></label>
                            </div>
                            <div class="form-group col-md-3">
                            <strong><label for="inputPassword4" >Quantity: <?php echo $results['order_quantity'];?></label></strong>
                            </div>
                            <div class="form-group col-md-3">
                            <label for="inputPassword4" >Status: <?php if($results['order_status'] == "Cancelled"){ echo "<strong class='text-danger'>Cancelled</strong>";}elseif($results['order_status'] == "Complete"){echo "<strong class='text-success'>Completed</strong>";}else{echo "<strong class='text-danger'>Denied</strong> <br> <small>Reasons: ".$results['reasons']."</small>";}?></label>
                            </div>
                            <div class="form-group col-md-3">
                            <label for="inputPassword4" style="float:right;"><small>Date Ordered: <?php echo $results['date_ordered'];?></small></label>
                            
                        </div>
                     
                    </div>
                    <hr>
                </div>
                <?php }
                          }
                          else{
                              echo 'No History found.';
                          }?>
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


</body>
</html>