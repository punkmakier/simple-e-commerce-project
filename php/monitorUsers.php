<?php
    require_once 'init.php';
    require_once 'adminSession.php';
    require_once '../class/database.php';

    $sqlShowAccounts = "SELECT * FROM `useraccounts` ORDER BY `userID` DESC";
    $sqlShowAccounts = mysqli_query($connection,$sqlShowAccounts);
    

    if(isset($_POST['deactivateBTN']))
    {
        $sqlDeactivate = "UPDATE `useraccounts` SET `user_status`= 'Deactivate' WHERE `userID` = $_POST[deactiveIDAccount]";
        if($sqlDeactivate = mysqli_query($connection,$sqlDeactivate))
        {
            header("Location: monitorUsers.php");
        }
        else{
            alert("Invalid ! Please contact the developer.");
        }
      
    }

    
    if(isset($_POST['activateBTN']))
    {
        $sqlDeactivate = "UPDATE `useraccounts` SET `user_status`= 'Activate' WHERE `userID` = $_POST[activateIDAccount]";
        if($sqlDeactivate = mysqli_query($connection,$sqlDeactivate))
        {
            header("Location: monitorUsers.php");
        }
        else{
            alert("Invalid ! Please contact the developer.");
        }
      
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
    <div class="display-4 p-4 shadow bg-light"><a href="adminPage.php"><i class="fas fa-arrow-left"></i> </a> Monitor Users</div>
    </div>
     
        <form action="searchMonitorUsers.php?" method="get">
            <div class="input-group" style="width: 300px; float: right; margin-top: 20px; margin-right: 20px;">
                <input name="searchUser" type="search" class="form-control" placeholder="Search by username" required>
                <div class="input-group-append">
                    <button class="btn btn-outline-success" type="submit" id="button-addon2">Search</button>
                </div>
                </div>
        </form>

    <div style="margin-top: 70px; background-color: #fff;">
    <table class="table table-striped">
  <thead class="table-dark" style="text-align: center;">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Email</th>
      <th scope="col">Gender</th>
      <th scope="col">Shoper's Name</th>
      <th scope="col">Address</th>
      <th scope="col">Status</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
        <?php if($rowCount = mysqli_num_rows($sqlShowAccounts) > 0){
            while($results = mysqli_fetch_array($sqlShowAccounts)){
        


                ?>
    <tr>
        <td><?php echo $results['userID']; ?></td>
      <td><?php echo $results['user_name']; ?></td>
      <td><b>Password is hide</b></td>
      <td style="display: none;"><?php echo $results['user_password']; ?></td>
      <td><?php echo $results['user_phonenumber']; ?></td>
      <td><?php echo $results['user_email']; ?></td>
      <td><?php echo $results['user_gender']; ?></td>
      <td><?php echo $results['shopers_name']; ?></td>
      <td><?php echo $results['user_address']; ?></td>
      <td><?php echo $results['user_status']; ?></td>
        <td>
        <div class="btn-group dropleft">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
            <div class="dropdown-menu p-2">
                <button type="button" class="btn bg-success dropdown-item activateUser"><span class=" text-white">Activate</span></button>
                <button type="button" class="btn bg-danger dropdown-item deactiveUser mt-1"><span class=" text-white">Deactivate</span></button>
                <button type="button" class="btn bg-warning dropdown-item showPassword mt-1">Show Password</button>
            </div>
            </div>
        </td>
    </tr>
    <?php
            }
}

?>
  </tbody>
</table>


    </div>

    <div class="modal fade" id="activateAccountModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"><span class="text-success">Activate Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <h6>Are you sure do you want to <span class="text-success">activate</span> this account?</h6><br><br><br>
        <form action="" method="post">
            <input type="hidden" id="activateID" name="activateIDAccount">
            <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        <button name="activateBTN" type="submit" class="btn btn-success">Yes! Activate this</button>
      </div>
        </form>
      
      </div>
   
    </div>
  </div>
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
          <h6>Are you sure do you want to <span class="text-danger">deactivate</span> this account?</h6><br><br><br>
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







<div class="modal fade" id="showPasswordModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"><span class="text-warning">Request Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
            <input type="hidden" id="orderIDDenied" name="orderDenied">
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Admin Passcode</label>
                <input type="password" id="passcode" name="reasonTextArea" class="form-control" required>
            </div>
            <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-warning passwordRevealBtn">GET PASSWORD</button>
      </div>
        </form>
      
      </div>
   
    </div>
  </div>
</div>




<div class="modal fade" id="passwordRevealModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">User's Account Info</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
            <span>Username</span><br>
            <input type="text" id="showUsername" class="form-control" style="margin-bottom: 10px;" readonly>
            <span>Password</span><br>
            <input type="text" id="passwordReveal" class="form-control" style="margin-botton: 50px;" readonly>
            <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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
            $('.showPassword').on('click', function() {
            $('#showPasswordModal').modal('show');

            $tr = $(this).closest('tr');

            var row = $tr.children("td").map(function(){
                return $(this).text();

            }).get();
            $('#showUsername').val(row[1]);
            $('#passwordReveal').val(row[3]);

            var adminPassCode = "adminpass";
            
            $(".passwordRevealBtn").click(function(){
                var pass = document.getElementById('passcode').value;
                if(pass == adminPassCode) 
                {
                    $('#showPasswordModal').modal('hide');
                
                    $('#passwordRevealModal').modal('show');
                     $tr = $(this).closest('tr');

                    var row = $tr.children("td").map(function(){
                        return $(this).text();

                    }).get();
   
                } 
                
                else{ 
                    alert("Invalid Admin Pass Code!");
                }
            
            });
            
            });
        });
    </script>


<script>
        $(document).ready(function(){
            $('.deactiveUser').on('click', function() {
            $('#deactiveAccountModal').modal('show');

            $tr = $(this).closest('tr');

            var rowID = $tr.children("td").map(function(){
                return $(this).text();

            }).get();


            $('#deactiveID').val(rowID[0]);

            
            });
        });
    </script>



<script>
        $(document).ready(function(){
            $('.activateUser').on('click', function() {
            $('#activateAccountModal').modal('show');

            $tr = $(this).closest('tr');

            var rowID = $tr.children("td").map(function(){
                return $(this).text();

            }).get();


            $('#activateID').val(rowID[0]);

            
            });
        });
    </script>

</body>
</html>