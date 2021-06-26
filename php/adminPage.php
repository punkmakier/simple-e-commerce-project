<?php 
session_start();
    require_once 'init.php';
    

    logoutAccount();

    deliverySchedule();


    F_adminChangePass();

    F_products();

    F_home();

    validateAdminStatus();
  
    $adminFunc = new adminFunctions();
    
    if(isset($_GET['orderRequest']))
        {
            header('Location: orderRequest.php');
        }

    if(isset($_GET['monitorUsers']))
        {
            header('Location: monitorUsers.php');
        }
    if(isset($_GET['monitorCancelledOrder']))
    {
      header('Location: monitorCancelledOrder.php');
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/adminPageStyle.css" style="text/css">
    <link rel="stylesheet" href="../css/bootstrap.min.css" style="text/css">
    <script src="https://kit.fontawesome.com/5caef3d764.js" crossorigin="anonymous"></script>
 
</head>
<body>
  <div class="wrapper">
    <div class="sidebar">
        <div class="image-name">
            <img src="../images/girl_avatar.png">
            <h5><?php echo $_SESSION['adminUsername']; ?></h5>
        </div>

        <div class="sidebar-items">
            <ul>
                <form action="" method="get">
                    <button name="home"><i class="fas fa-home"></i>Dashboard</button>
                    <button name="orderRequest"><i class="fas fa-truck-loading"></i> Order Requests</button>
                    <button name="monitorUsers"><i class="fas fa-users"></i></i>Monitor Users</button>
                    <button name="monitorCancelledOrder"><i class="fas fa-ban"></i>Monitor Cancelled Order</button>
                    <button type="button" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-bullhorn"></i>Announcement</button>
                    <button name="deliverySched"><i class="fas fa-calendar-alt"></i>Delivery Schedule</button>
                    <button name="products"><i class="fas fa-shopping-cart"></i>Products</button>
                    <button type="button" data-toggle="modal" data-target="#accountSettingsModal"><i class="fas fa-user-cog"></i>Change Password</button>
                    <button name="logoutAccount"><i class="fas fa-sign-out-alt"></i>Logout</button>
                </form>
      
            </ul>
        </div>
    </div>


<!-- Announcement Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Announcement</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
        <small id="emailHelp" class="form-text text-muted">Your announcement will be posted on the main website.</small><br>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Title</label>
                <input name="titleAnnouncement" class="form-control" type="text"  ><br>
                <label for="exampleFormControlTextarea1">Make an Announcement</label>
                <textarea name="descAnnouncement" class="form-control" id="exampleFormControlTextarea1" rows="3" ></textarea>
            </div>

            <div class="modal-footer">
                <button name="btn_deleteAnnouncement" type="submit" class="btn btn-danger ml-3" style="position: absolute; left: 0;">Clear Announcement</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button name="btn_announcement" type="submit" class="btn btn-primary">Confirm</button>
            </div>
        </form>
      </div>
     
    </div>
  </div>
</div>



<!-- Account Settings Modal -->
<div class="modal fade" id="accountSettingsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
        <small id="emailHelp" class="form-text text-muted">IMPORTANT! Do not share you account information.</small><br>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Current Password</label>
                <input name="currentPassword" type="password" class="form-control"  required><br>
                <label for="exampleFormControlTextarea1">New Password</label>
                <input name="password" type="password" class="form-control"  required><br>
                <label for="exampleFormControlTextarea1">Confirm Password</label>
                <input name="confirmPassword" type="password" class="form-control" required><br>

                
            </div>

            <div class="modal-footer">
                
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button name="btn_changePassword" type="submit" class="btn btn-primary">Confirm</button>
            </div>
        </form>
      </div>
     
    </div>
  </div>
</div>


    <div class="content-sidebar pl-3">
    
            <?php F_announcement();
                    F_deleteAnnouncement();
            ?>
      <h2 class="display-4" style="font-size: 35px; margin-top: 20px; float: left;">System Reports</h2><br><br><br>
      <hr>

      <div class="container-fluid">
        <div class="row ">
          <div class="col">
              <div class="reportCard">
                  <h4>Total Gross</h4>
                  <h5 style="text-align: center; font-size: 30px; margin-top: 20px;"><i class="fas fa-money-bill-wave"></i>₱ <?php $adminFunc->displayTotalAmount();?>.00</h5>
              </div>
          </div>

          <div class="col">
              <div class="reportCard totalMembers">
                  <h4>Total Members</h4>
                  <h5 style="text-align: center; font-size: 30px; margin-top: 20px;"><i class="fas fa-users"></i> <?php $adminFunc->displayUserAccounts();?></h5>

              </div>
          </div>

          <div class="col">
              <div class="reportCard allProduct">
                  <h4>All Items</h4>
                  <h5 style="text-align: center; font-size: 30px; margin-top: 20px;"><i class="fas fa-shopping-cart"></i> <?php $adminFunc->displayTotalItems();?></h5>
              </div>
          </div>
        </div>
      </div>
    <br>    <br>    <br>
      <hr>

      <h2 class="display-4" style="font-size: 30px; margin-top: 50px; margin-bottom: 40px;">Customer Reports</h2>
      <hr>

      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
              <div class="customerReportCard pendingOrder">
                  <h4>Pending Orders</h4>
                  <h5 style="text-align: center; font-size: 30px; margin-top: 20px;"><?php $adminFunc->displayPendingCounts();?></h5>
              </div>
          </div>
          <div class="col-md-3">
              <div class="customerReportCard completeOrder">
                  <h4>Complete Orders</h4>
                  <h5 style="text-align: center; font-size: 30px; margin-top: 20px;"><?php $adminFunc->displayCompleteOrder();?></h5>
              </div>
          </div>
          <div class="col-md-3">
              <div class="customerReportCard cancelOrder">
                  <h4>Cancelled Orders</h4>
                  <h5 style="text-align: center; font-size: 30px; margin-top: 20px;"><?php $adminFunc->displayCancelledOrder();?></h5>
              </div>
          </div>
          <div class="col-md-3">
              <div class="customerReportCard deniedOrder">
                  <h4>Denied Orders</h4>
                  <h5 style="text-align: center; font-size: 30px; margin-top: 20px;"><?php $adminFunc->displayDeniedOrder();?></h5>
              </div>
          </div>
        </div>
      </div>

  
    </div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js"></script>

    <script>
        $(Document).ready(function(){
            $('.toast').toast('show');
        })
    </script>
</body>
</html>