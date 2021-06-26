<?php
    require_once 'init.php';
    require_once 'adminSession.php';
    require_once '../class/database.php';

    $sqlShowCancelled = "SELECT * FROM `orderproducts` WHERE `order_status` = 'Cancelled'";
    $sqlShowCancelled = mysqli_query($connection,$sqlShowCancelled);
    

    if(isset($_POST['clearBTNsuccess']))
    {
        $clear = new clearCancelledOrders();
        $clear->clearCancelled();
        header("Location: monitorCancelledOrder.php");
    }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/deliveryScheduleStyle.css" style="text/css">
    <script src="https://kit.fontawesome.com/5caef3d764.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid p-0">
        <div class="display-4 p-4 shadow bg-light"><a href="adminPage.php"><i class="fas fa-arrow-left"></i></a> Monitor Cancelled Orders <button class="btn btn-danger float-right mt-4 clearBTN">Clear All Cancelled Order</button></div>
        
    </div>

     

    <div style="margin-top: 70px; background-color: #fff;">
    <table class="table table-striped">
  <thead class="table-dark" style="text-align: center;">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Username</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Order ID</th>
      <th scope="col">Product Type</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Sub Amount</th>
      <th scope="col">Address</th>
      <th scope="col">Notes</th>
      <th scope="col">Status</th>
      <th scope="col">Date Ordered</th>
    </tr>
  </thead>
  <tbody>
        <?php if($rowCount = mysqli_num_rows($sqlShowCancelled) > 0){
            while($results = mysqli_fetch_array($sqlShowCancelled)){
        


                ?>
    <tr>
      <td><?php echo $results['id']; ?></td>
      <td><?php echo $results['order_username']; ?></td>
      <td><?php echo $results['order_userPhoneNum']; ?></td>
      <td><?php echo $results['orderID']; ?></td>
      <td><?php echo $results['order_productType']; ?></td>
      <td><?php echo $results['order_productName']; ?></td>
      <td><?php echo $results['order_price']; ?></td>
      <td><?php echo $results['order_quantity']; ?></td>
      <td><?php echo $results['total_amount']; ?></td>
      <td><?php echo $results['order_address']; ?></td>
      <td><?php echo $results['order_notes']; ?></td>
      <td><?php echo $results['order_status']; ?></td>
      <td><?php echo $results['date_ordered']; ?></td>
    </tr>
    <?php
            }
}

?>
  </tbody>
</table>


    </div>



    
<div class="modal fade" id="deactiveAccountModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"><span class="text-danger">Deactivate Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <h6>Are you sure do you want to deactivate this account?</h6><br><br><br>
        <form action="" method="post">
            <input type="hidden" id="deactiveID" name="deactiveIDAccount">
            <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        <button name="deactivateBTN" type="submit" class="btn btn-warning">Yes! Deactive this</button>
      </div>
        </form>
      
      </div>
   
    </div>
  </div>
</div>




<div class="modal fade" id="cancelledOrderModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"><span class="text-danger">Confirmation Needed</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <span>Are you sure do you want to clear these?</span><br><br>
            <div class="modal-footer">
            <form action="" method="post">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button name="clearBTNsuccess" type="submit" class="btn btn-warning passwordRevealBtn">Confirm</button>
            </form>

      </div>
   
      
      </div>
   
    </div>
  </div>
</div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

    <script src="../js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function(){
            $('.clearBTN').on('click', function() {
            $('#cancelledOrderModal').modal('show');

            
            });
        });
    </script>


</body>
</html>