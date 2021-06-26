<?php
    require_once 'init.php';
    require_once 'adminSession.php';
    require_once '../class/database.php';



    $item;
    if(isset($_GET['searchOrderRequest']))
    {

        $item = $_GET['searchOrderRequest'];

        $queryUserStatus = "SELECT * FROM `orderproducts` WHERE `order_username` = '$item' AND `order_status` = 'Pending'";
        $queryUserStatus = mysqli_query($connection,$queryUserStatus);
    
    }

    if(!isset($_GET['searchOrderRequest']))
    {
        header("Location: orderRequest.php");
    }

    else
    {
        $_GET['searchOrderRequest'] = "No results found.";
    }





    if(isset($_POST['orderIDComplete']))
    {
        $sqlShowPendings = "UPDATE `orderproducts` SET `order_status`= 'Complete' WHERE `orderID` = '$_POST[orderIDComplete]' ";
        $sqlShowPendings = mysqli_query($connection,$sqlShowPendings);
        header("Location: orderRequest.php");
    }

    if(isset($_POST['orderDenied']))
    {
        $reasons = $_POST['reasonTextArea'];
        $sqlShowPendings = "UPDATE `orderproducts` SET `order_status`= 'Denied', `reasons` = '$reasons' WHERE `orderID` = '$_POST[orderDenied]' ";
        $sqlShowPendings = mysqli_query($connection,$sqlShowPendings);
        header("Location: orderRequest.php");
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
    <div class="display-4 p-4 shadow bg-light"><a href="orderRequest.php"><i class="fas fa-arrow-left"></i></a> Order Request</div>
    </div>
     
        <form action="" method="get">
            <div class="input-group" style="width: 300px; float: right; margin-top: 20px; margin-right: 20px;">
                <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-success" type="button" id="button-addon2">Search</button>
                </div>
                </div>
        </form>

    <div style="margin-top: 70px; background-color: #fff;">
    <table class="table table-striped">
  <thead class="table-dark" style="text-align: center;">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Sub Amount</th>
      <th scope="col">Username</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Order ID</th>
      <th scope="col">Product Type</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Address</th>
      <th scope="col">Notes</th>
      <th scope="col">Date Ordered</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
        <?php if($rowCount = mysqli_num_rows($queryUserStatus) > 0){
            while($results = mysqli_fetch_array($queryUserStatus)){?>
    <tr>
      <th scope="row"><?php echo $results['id']; ?></th>
      <td class="text-danger" style="font-weight: 600;"> ₱ <?php echo $results['total_amount']; ?></td>
      <td><?php echo $results['order_username']; ?></td>
      <td><?php echo $results['order_userPhoneNum']; ?></td>
      <td><?php echo $results['orderID']; ?></td>
      <td><?php echo $results['order_productType']; ?></td>
      <td><?php echo $results['order_productName']; ?></td>
      <td><?php echo $results['order_price']; ?></td>
      <td><?php echo $results['order_quantity']; ?></td>
      <td><?php echo $results['order_address']; ?></td>
      <td><?php echo $results['order_notes']; ?></td>
      <td><?php echo $results['date_ordered']; ?></td>
        <td>
        <div class="btn-group dropleft">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
            <div class="dropdown-menu p-2">
                <button type="button" class="btn bg-success dropdown-item complete"><span class=" text-white">Complete</span></button>
                <button type="button" class="btn bg-danger dropdown-item denied mt-1"><span class=" text-white">Denied</span></button>
            </div>
            </div>
        </td>
    </tr>
    <?php
            }
}
else{
    echo 'No Pendings Order Yet';
}
?>
  </tbody>
</table>


    </div>

    <div class="modal fade" id="completeModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Complete Confirmation Needed</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h6>Are you sure do you want to update this to <span class="text-success">Complete?</span></h6>
        <form action="" method="post">
            <input type="hidden" id="orderId" name="orderIDComplete">
            <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Yes! Confirm</button>
      </div>
        </form>
      
      </div>
   
    </div>
  </div>
</div>






<div class="modal fade" id="deniedModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"><span class="text-danger">Denied</span> Confirmation Needed</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h6>Are you sure do you want to update this to <span class="text-danger">Denied</span></h6><br>
        <form action="" method="post">
            <input type="hidden" id="orderIDDenied" name="orderDenied">
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Reason</label>
                <textarea name="reasonTextArea" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Please indicate the reason." required></textarea>
            </div>
            <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary">Yes! Confirm</button>
      </div>
        </form>
      
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
            $('.complete').on('click', function() {
            $('#completeModal').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function(){
                return $(this).text();

            }).get();

            console.log(data);

            $('#orderId').val(data[3]);

            
            });
        });
    </script>
    


    <script>
        $(document).ready(function(){
            $('.denied').on('click', function() {
            $('#deniedModal').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function(){
                return $(this).text();

            }).get();

            console.log(data);

            $('#orderIDDenied').val(data[3]);

            
            });
        });
    </script>

</body>
</html>