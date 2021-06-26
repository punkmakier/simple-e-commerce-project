<?php
    session_start();
    require_once 'init.php';
 
 
    if(isset($_GET['product']))
    {
        $productID = $_GET['product'];

        $order = new viewBuyProduct($productID);
    }

    if(!isset($_SESSION['User_email']) || empty($_SESSION['User_email']) || isset($_SESSION['User_email']) == "" && !isset($_SESSION['User_address']) || empty($_SESSION['User_address']) || isset($_SESSION['User_address']) == "")
    {
        header("Location: myaccount.php?completeaccountinfo");
    }


    if(isset($_SESSION['ID']))
    {
        $userid = $_SESSION['ID'];

        $viewuser = new viewUserUpdate($userid);
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 
    <link rel="stylesheet" href="../css/bootstrap.min.css" style="text/css">
    <link rel="stylesheet" href="../css/orderProductStyle.css" style="text/css">

    <script src="https://kit.fontawesome.com/5caef3d764.js" crossorigin="anonymous"></script>
</head>
<body>

<?php 


    if(isset($_POST['btn_buyNow']))
    {

        $char = "ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
        $randomORDERID = substr(str_shuffle($char),0,10);


        $userName = $_SESSION['User_username'];
        $userPhone = $_SESSION['User_phone'];
        $orderid = $randomORDERID;
        $order_proType = $_POST['proType'];
        $order_proName = $_POST['productName'];
        $order_proPrice = $_POST['proPrice'];
        $order_proQty = $_POST['proQty'];
        $order_proAd = $_POST['proAddress'];
        $order_proNotes = $_POST['proNotes'];
        
        $order_totalAmount = $order_proPrice * $order_proQty;

    
 


        $buy = new orderProcess($userName,$userPhone,$orderid,$order_proType,$order_proName,$order_proPrice,$order_proQty,$order_totalAmount,$order_proAd,$order_proNotes);
        if($buy->insertOrder())
        {
            
            header("Location: homepage.php?ordersuccess");
        }

        else
        {
            echo 'invalid order';
        }
    }


?>



<div class="modal fade" id="orderModal"data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <form action="" method="post" enctype="multipart/form-data">
      <div class="modal-header">

        <input name="proType" type="text" class="modal-title cstmInput" value="<?php $order->orderProType();?>" readonly>
       
      </div>
      <div class="modal-body">

            <div class="form-group">
            <div class="image">
                <img src="../images/productImages/<?php $order->orderProPicture();?>" width=100 height=100 style="margin-bottom: 20px;">
            
            </div>

  
                <input name="productName" type="text" class="form-control" value="<?php $order->orderProName();?>" readonly><br>
     
                        <div class="form-row ">
                            <div class="form-group col-md-6">
                            <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">₱</span>
                            </div>
                            <input name="proPrice" type="text" class="form-control" aria-label="Amount (to the nearest dollar)" value="<?php $order->orderProPrice();?>" readonly >
                            <div class="input-group-append">
                                <span class="input-group-text">.00</span>
                            </div>
                            </div>

                            </div>
                            <div class="form-group col-md-6">
                            <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Qty</span>
                            </div>
                            <input name="proQty" type="number" class="form-control" aria-label="Amount (to the nearest dollar)" value="1" min="1" max="500">
                      
                            </div>

                            </div>
                        </div>
                <h6><span>Delivery Information</span></h6>
                <label >Delivery Address</label>
                <input name="proAddress" type="text" class="form-control" value="<?php  $viewuser->viewAddress();?>" required><br>
                <label for="inputEmail4">Notes</label>
                <textarea name="proNotes" type="text" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Tell us your landmark. Ex: La Almirah Crest " required></textarea>
        
                
            </div>

            <div class="modal-footer">
                
                <a href="homepage.php" class="btn btn-danger" >Cancel</a>
                
                <button name="btn_buyNow" type="submit" class="btn btn-success">Buy now</button>
            </div>
        </form>
      </div>
     
    </div>
  </div>
</div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $(document).ready(function(){
        $('#orderModal').modal('show');
    });
</script>



</body>
</html>