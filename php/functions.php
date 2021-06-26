<?php


    function F_adminLogin()
    {
    

        if(isset($_POST['submit']))
        {
            $con = new adminLogin($_POST['username'],$_POST['password']);
            if( $con->AdminLoggingIn())
            {
                header('Location: adminPage.php');
            }
            else{
                    echo '<div class="alert alert-danger" role="alert" style="position: absolute; width: 420px">
                    <strong>Login Failed!</strong> Invalid <strong>username</strong> or <strong>password</strong>.
                  </div>';
            }
           
        }
    }

    function logoutAccount()
    {
        if(isset($_GET['logoutAccount']))
        {
            header('Location: logout.php');
        }
    }

    function logoutSuccess()
    {
        if(isset($_GET['logoutsuccess']))
        {
            echo '<div class="alert alert-danger" role="alert" style="position: absolute; width: 420px">
            Logout successfully
          </div>';
        }
    }

    function deliverySchedule()
    {
        if(isset($_GET['deliverySched']))
        {
            header('Location: deliverySchedule.php');
        }
    }

    function F_products()
    {
        if(isset($_GET['products']))
        {
            header('Location: products.php');
        }
    }

    function F_home()
    {
        if(isset($_GET['home']))
        {
            header('Location: adminPage.php');
        }
    }


    function insertSchedule()
    {
        if(isset($_POST['submit']))
        {
            $getShipVia = $_POST['shipVia'];
            $getDeliveryDays = $_POST['deliveryDays'];
            $getStartTime = $_POST['startTime'].'am';
            $getEndTime = $_POST['endTime'].'pm';

            $startEndTime = $getStartTime.' - '.$getEndTime;
            $addsched = new addSchedule($getDeliveryDays,$getShipVia,$startEndTime);
            if($addsched->addSched())
            {
                echo "<script>alert('You added successfully')</script>";
                header("Location: deliverySchedule.php ");
            }
            else{
                echo 'Sorry Invalid';
            }
        }
    }


    function deleteSchedule()
    {
        if(isset($_GET['deleteSched']))
        {

            $delete = new deleteSchedule($_GET['deleteSched']);
            if( $delete->deleteSchedById())
            {
                header('Location: deliverySchedule.php');
                
            }
            else{
                echo "<script>alert('Delete Invalid')</script>";
            }
           
        }
    }


    function F_announcement()
    {
        
        if(isset($_POST['btn_announcement']))
        {
            $title = $_POST['titleAnnouncement'];
            $desc = $_POST['descAnnouncement'];

            $announce = new addAnnouncement($title,$desc);
            if($announce->addAnnounce())
            {
                echo '<div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000" style="position: absolute; top: 0; right: 0;">
                <div class="toast-header bg-success">
                  <strong class="mr-auto">Notification</strong>
                  <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="toast-body">
                    You successfully added an <span>Announcement</span>.
                </div>
              </div>';

            }

            else{
                echo '<div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000" style="position: absolute; top: 0; right: 0;">
                <div class="toast-header bg-danger">
                  <strong class="mr-auto">Notification</strong>
                  <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="toast-body">
                    ERROR! Please contact the developer.
                </div>
              </div>';
            }

        }
    }
   

    function F_deleteAnnouncement()
    {
        if(isset($_POST['btn_deleteAnnouncement']))
        {
            $deleteAnnounce = new deleteAnnouncement();
            if($deleteAnnounce->deleteAnnounce())
            {
                echo '<div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000" style="position: absolute; top: 0; right: 0;">
                <div class="toast-header bg-warning">
                  <strong class="mr-auto">Notification</strong>
                  <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="toast-body">
                    You successfully clear the <span>Announcement</span>.
                </div>
              </div>';
              
          
            }
            else{
                echo '<div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000" style="position: absolute; top: 0; right: 0;">
                <div class="toast-header bg-danger">
                  <strong class="mr-auto">Notification</strong>
                  <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="toast-body">
                    ERROR! Please contact the developer.
                </div>
              </div>';
            }
        }
    }


    function F_deleteAllSchedule()
    {
        if(isset($_POST['btn_deleteAllSchedule']))
        {
            $clearSched = new clearSchedule();
            if($clearSched->deleteAllSched())
            {
                header("Location: deliverySchedule.php");
            }
            else{
                echo 'ERROR! Please contact the developer';
            }
        }
    }



    function F_adminChangePass()
    {
        if(isset($_POST['btn_changePassword']))
        {
            $currentPass = $_POST['currentPassword'];
            $password = $_POST['password'];
            $confirmPass = $_POST['confirmPassword'];
          
            if($currentPass !== $_SESSION['adminPassword'])
            {
                echo '<div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000" style="position: absolute; top: 0; right: 0;">
                <div class="toast-header bg-danger" style="color: #FFF;">
                  <strong class="mr-auto">Error</strong>
                  <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="toast-body">
                    Invalid ! Your <strong>current password</strong> is not match.
                </div>
              </div>';
            }
            elseif( $password !== $confirmPass)
            {
                echo '<div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000" style="position: absolute; top: 0; right: 0;">
                <div class="toast-header bg-danger" style="color: #FFF;">
                  <strong class="mr-auto">Error</strong>
                  <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="toast-body">
                    Your password is not match! Please try again</span>.
                </div>
              </div>';
            }

            elseif(strlen($password) < 8)
            {
                echo '<div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000" style="position: absolute; top: 0; right: 0;">
                <div class="toast-header bg-danger" style="color: #FFF;">
                  <strong class="mr-auto">Error</strong>
                  <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="toast-body">
                    Your password must be more than 8 characters</span>.
                </div>
              </div>';
            }

            
            elseif($password === $confirmPass)
            {
                $changePass = new adminChangePassword( $password);
                if($changePass->adminChangePass())
                {
                    header("Location: logout.php");
                }
            }
    
         
        }
    }


    function submitProduct()
    {
        if(isset($_POST['submitProduct']))
        {
            $target = "../images/productImages/".basename($_FILES['image']['name']);

            $productToPlace = $_POST['selectToAddProduct'];

            $productName = $_POST['productName'];
            $productPrice = $_POST['productPrice'];
            $productStocks = $_POST['productStocks'];
            $productDesc = $_POST['productDesc'];
            $image = $_FILES['image']['name'];

            $total_invest = $productPrice *   $productStocks;
            
                $insertData = new addProduct($productToPlace,$productName,$productPrice,$productStocks,$total_invest, $productDesc,$image);
                if($insertData->insertImage())
                {
                    if(move_uploaded_file($_FILES['image']['tmp_name'], $target))
                    {
                        header( "refresh:1;url=products.php" );
                        echo '<div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000" style="position: absolute; top: 10%; left: 50%;transform: translate(-50%,-50%); z-index: 999;">
                            <div class="toast-header bg-success" style="color: #FFF">
                            <strong class="mr-auto" >Notification</strong>
                            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="toast-body">
                                Product added success.
                            </div>
                        </div>';
                   
                    }
    
                    else
                    {
                        echo '<div class="toast w-25" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000" style="position: absolute; top: 10%; left: 50%;transform: translate(-50%,-50%); z-index: 999; ">
                            <div class="toast-header bg-danger">
                            <strong class="mr-auto">Notification</strong>
                            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="toast-body">
                                Error please contact the developer.
                            </div>
                        </div>';
                    }
    
                }
    
                else
                {
                    echo '<div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000" style="position: absolute; top: 10%; left: 50%; transform: translate(-50%,-50%); z-index: 999;">
                            <div class="toast-header bg-danger">
                            <strong class="mr-auto">Notification</strong>
                            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="toast-body">
                                Error please contact the developer.
                            </div>
                        </div>';
                }
            




      
        }
    }


    function F_deleteProduct()
    {
        if(isset($_GET['delete']))
        {
            $deleteProd = new deleteProduct($_GET['delete']);
            if($deleteProd->deletingProduct())
            {
                echo '<div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000" style="position: absolute; top: 10%; left: 50%; transform: translate(-50%,-50%); z-index: 999;">
                            <div class="toast-header bg-success">
                            <strong class="mr-auto">Notification</strong>
                            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="toast-body">
                                Product deleted successfully.
                            </div>
                        </div>';
            }

            else
            {
                echo '<div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000" style="position: absolute; top: 10%; left: 50%; transform: translate(-50%,-50%); z-index: 999;">
                            <div class="toast-header bg-danger">
                            <strong class="mr-auto">Notification</strong>
                            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="toast-body">
                                Error please contact the developer.
                            </div>
                        </div>';
            }
        }
    }


    function F_updateProducts()
    {
        if(isset($_POST['btnUpdate']))
        {
    
            $updatePtype = $_POST['updateProductType'];
            $updatePname = $_POST['updatePname'];
            $updatePprice = $_POST['updatePprice'];
            $updatePstock = $_POST['updatePstocks'];
            $updatePdesc = $_POST['updatePdesc'];

            $updateTotalInvest = $updatePprice *  $updatePstock;
    
        
           if(isset($_GET['editProducts']))
           {
               $productsId = $_GET['editProducts'];
               $updateProByID = new updateProducts($updatePtype,$updatePname,$updatePprice,$updatePstock,$updateTotalInvest,$updatePdesc,$productsId);
               if($updateProByID->updateProd())
               {
                   header("Location: products.php?updatesuccess");
               }
       
               else
               {
                   echo 'invalid please try again';
               }
       
           }
    
           
        }
    }

    function updateSuccessNotif()
    {
        if(isset($_GET['updatesuccess']))
        {
            echo '<div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000" style="position: absolute; top: 10%; left: 50%; transform: translate(-50%,-50%); z-index: 999;">
            <div class="toast-header bg-success">
            <strong class="mr-auto">Notification</strong>
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="toast-body">
                Product updated !.
            </div>
        </div>';
        }
    }


    function userLogin()
    {
        if(isset($_POST['loginBTN']))
        {
            $userName = $_POST['username'];
            $userPass = $_POST['password'];

            $userValidateIfDeactivate = new checkDeactivateAccount($userName);
            $userAccount = new userLoginAccount($userName,$userPass);

   
            if($userValidateIfDeactivate->checkAccount() == "Deactivate")
            {
                header("Location: deactivateaccount.php");
            }
        

            elseif($userAccount->userLogin())
            {
                header("Location: homepage.php");
            }
            else
            {
                echo '<div class="alert alert-danger" role="alert" style="position: absolute; width: 350px">
                Invalid username or password!
              </div>';
            }


           
        }
    }

    function userRegister()
    {
        if(isset($_POST['signupBTN']))
        {
            $char = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
            $randomName = substr(str_shuffle($char),0,8);

            $username = $_POST['reg_username'];
            $password = $_POST['reg_password'];
            $confPass = $_POST['reg_confirmPass'];
            $phone = $_POST['phoneNumb'];
            
            $trimUser =  trim($username);
            trim($password);
            trim($confPass);
         

            $reg = new userRegisterAccounts($trimUser,$password,$phone,$randomName);
            $validateuser = new registerValidation($trimUser);
          
           if($password !== $confPass)
            {
                echo '<div class="alert alert-danger" role="alert" style="position: absolute; width: 350px">
                Your password is not match!
                </div>';
            }

            elseif($validateuser->validateUsername() == $trimUser)
            {
                header("Location: register.php?invalid");
    
            }
            elseif($reg->userRegister()){
                header("Location: login.php?registersuccessfully");
            }
        }
    }

    function regInvalid()
    {
        if(isset($_GET['invalid']))
        {
            echo '<div class="alert alert-danger" role="alert" style="position: absolute; width: 350px">
            Username is already exists.
            </div>';
        }
    }


    function validateAdminStatus()
    {
       
        if(empty($_SESSION['status']) || $_SESSION['status'] === "invalid")
        {
            $_SESSION['status'] = "invalid";
            header("Location: adminLoginPage.php");
        }
    }


    function F_updateUserInfo()
    {
        if(isset($_POST['userInfoUpdateBTN']))
        {
            $myID = $_SESSION['ID'];
  
            $UserUpdate_phoneNum = $_POST['userUserphone'];
            $UserUpdate_email = $_POST['userUseremail'];
            $UserUpdate_gender = $_POST['genderRadio'];
            $UserUpdate_shoperName= $_POST['userUsershopersName'];
            $UserUpdate_address = $_POST['userUseraddress'];
            
            
 
    
            
            $updateUser = new updateUserInfos(trim($UserUpdate_phoneNum),trim($UserUpdate_email),$UserUpdate_gender,trim($UserUpdate_shoperName),trim($UserUpdate_address), $myID);
            
            if($updateUser->updateUserInfo())
            {
                $_SESSION['User_email'] =   $UserUpdate_email;
                $_SESSION['User_address'] =   $UserUpdate_address;
                header("Refresh:0; url=myaccount.php");
                echo '<div class="alert alert-success" role="alert">
                Account Information is updated.
              </div>';
            }

            

            else
            {
                echo '<div class="alert alert-danger" role="alert">
                Invalid Update! Please contact this to admin.
              </div>';
            }
    
        }
    }

    function pleaseUpdateAccountInfo()
    {
        if(isset($_GET['completeaccountinfo']))
        {
            echo '<div class="alert alert-warning" role="alert">
            Please complete your account information first. Before proceeding of buying products. 
          </div>';
        }
    }


    function F_userChangePassword()
    {
        if(isset($_POST['userInfoUpdateBTN']))
        {
            $currentUserPass = $_POST['currentPassword'];
            $passwordUser = $_POST['passwordUser'];
            $confirmUserPass = $_POST['passwordUserconfirm'];
            $id = $_SESSION['ID'];
          
            if($currentUserPass !== $_SESSION['User_password'])
            {  
                echo '<div class="alert alert-danger" role="alert">
                Your current password is not equal
              </div>';
            }
            elseif( $passwordUser !== $confirmUserPass)
            {
                echo '<div class="alert alert-danger" role="alert">
                Password are not equal
              </div>';
            }
    
            elseif(strlen($passwordUser) < 8)
            {
                echo '<div class="alert alert-danger" role="alert">
                Password must be more than 8 characters
              </div>';
            }
    
            
            elseif($passwordUser == $confirmUserPass)
            {
                $changePass = new userChangePass( $passwordUser,$id);
                if($changePass->userChangePassword())
                {
                    $_SESSION['User_password'] = $passwordUser;
                    header("Location: myaccount.php");
                }
            }
    
         
        }
    }

    function F_userValidatePage()
    {
        
    if(empty($_SESSION['User_access']) || $_SESSION['User_access'] === "invalid")
    {
        $_SESSION['User_access'] = "invalid";
        header("Location: login.php");

    }
    }
    
?>