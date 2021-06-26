<?php
session_start(); 
    require_once 'php/init.php';
    require_once 'class/userviewFoods.php';
    require_once 'class/userviewBeautyPro.php';
    require_once 'class/userviewClothing.php';
    require_once 'class/userviewAppliances.php';
    require_once 'class/userviewLotforsale.php';
    require_once 'class/userviewRoomforrent.php';
    require_once 'class/userviewMore.php';


    if(isset($_SESSION['User_username']))
    {
        header("Location: php/homepage.php");
    }

    if(isset($_POST['ActionBTN']))
    {
        header("Location: php/login.php");
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css" style="text/css">
    
    <link rel="stylesheet" href="css/mainpageStyle.css" style="text/css">
    <script src="https://kit.fontawesome.com/5caef3d764.js" crossorigin="anonymous"></script>

    <title>Softy Business</title>
</head>
<body>
    <header id="home">
        <div class="container-fluid-md pl-md-5 pr-md-5">

            <nav class="navbar navbar-expand-lg navbar-light cstm-nav">
                    <div class="imgLOGO">
                        <a href=""><img src="images/1_softyLOGO.png"> <!-- logo here-->
                        </a>
                    </div>


                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                        
                        <li class="nav-item">
                            <a class="nav-link active" href="#">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact-aboutUs">ABOUT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact-aboutUs">CONTACT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#delivery-schedule">DELIVERY SCHEDULE</a>
                        </li>
                        <form action="php/login.php">
                            <button class="btn custom-btn" type="submit">Login/Register</button>
                        </form>
                  

                        </ul>
                        
                    </div>
            </nav>

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    
                    <div class="carousel-item active">
                        <img src="images/tuna_belly_bg.png" class="d-block w-100 h-50">
                         <div class="carousel-caption d-none d-md-block">
                            <h5 class="captionText-shadow">Address for pick up</h5>
                            <p>La Almirah Crest Barangay Cogon Poblacion, Liloan, 6002 Cebu</p>
                            <a class="BuyNowBTN" href="#buyNow">BUY NOW</a>
                        </div>
                    </div>
                    <div class="carousel-item cstm-carousel-caption">
                        <img src="images/tuna_panga_bg.png" class="d-block w-100 h-50" >
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Address for pick up</h5>
                            <p>La Almirah Crest Barangay Cogon Poblacion, Liloan, 6002 Cebu</p>
                            <a class="BuyNowBTN" href="#buyNow">BUY NOW</a>
                        </div>
                    </div>
                    <div class="carousel-item cstm-carousel-caption">
                        <img src="images/softy_fragrance.png" class="d-block w-100 h-50" >
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Address for pick up</h5>
                            <p>La Almirah Crest Barangay Cogon Poblacion, Liloan, 6002 Cebu</p>
                            <a class="BuyNowBTN" href="#buyNow">BUY NOW</a>
                        </div>
                    </div>
                    
                </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                   
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
            </div>
         
        </div>
    </header>

    <div class="container-fluid-md pl-md-5 pr-md-5 pr-4 pl-4">
    <?php 
            $viewAnnounce = new viewAnnouncement();
            $viewAnnounce->viewAnnounce();
       ?>
</div>
    <div class="container mt-5">
        <div class="top-sales">

            <h1>TOP SALE</h1>
            <img src="images/fireICON.png">
            <form action="php/searchProduct.php" class="form-inline my-2 my-lg-0 ml-0 cstm-search" method="get">
                <input  name="searchProduct" class="form-control mr-sm-2"placeholder="Search" required>
                <button type="submit" class="btn my-2 my-sm-0">Search</button>
            </form>

        </div>
        <hr><br>
        <div class="row">

            <div class="col">
                <div class="custom-card">
                    <img src="images/tuna_belly.png">
                    <h5 class="top-price">PHP 330</h5>
                    <div class="tag-sold">
                        <span>SOLD 998</span>
                    </div>
                    <div class="content-sale">
                        <h4 class="heading">Tuna Belly</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi alias a quibusdam eligendi, ipsam adipisci praesentium tempore maxime provident amet.</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="custom-card">
                    <img src="images/tuna_panga.png">
                    <h5 class="top-price">PHP 185</h5>
                    <div class="tag-sold">
                        <span>SOLD 1053</span>
                    </div>
                    <div class="content-sale">
                        <h4 class="heading">Tuna Panga</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi alias a quibusdam eligendi, ipsam adipisci praesentium tempore maxime provident amet.</p>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="custom-card">
                    <img src="images/lacoste_perfume.png">
                    <h5 class="top-price">PHP 500</h5>
                    <div class="tag-sold">
                        <span>SOLD 998</span>
                    </div>
                    <div class="content-sale">
                        <h4 class="heading">Perfume: LACOSTE</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi alias a quibusdam eligendi, ipsam adipisci praesentium tempore maxime provident amet.</p>
                    </div>
                </div>
            </div>
          
        </div>
        <hr>
    </div>
    <!--    <div role="tabpanel" class="tab-pane fade show active" id="perfume" >
                   
                </div> -->

    

        <div class="container mt-5" id="buyNow">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" role="tab" data-toggle="tab" href="#foods">Foods</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" role="tab" data-toggle="tab" href="#beautyProducts">Beauty Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" role="tab" data-toggle="tab" href="#Clothing">Clothing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" role="tab" data-toggle="tab" href="#appliances">Appliances</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" role="tab" data-toggle="tab" href="#room4rent">Room 4 Rent</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" role="tab" data-toggle="tab" href="#lot4sale">Lot 4 Sale</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" role="tab" data-toggle="tab" href="#more">More</a>
                </li>
         
            </ul>

            <div class="tab-content">

                <div role="tabpanel" class="tab-pane fade show active" id="foods" ><br>
                <div class="container">
      
                        <?php 
                             if($rowCount = mysqli_num_rows($queryFoods)>0)
                             {
                        while($results = mysqli_fetch_array($queryFoods)) {?>
                            <div class="col-md mt-3">
                                <div class="perfume-card" data-aos="fade-up">
                                <span class="hot">HOT</span>
                                <strong style="text-shadow: 0 0 10px #000; position: absolute; left:0; z-index: 999; color: #fff; padding: 10px 10px; font-size: 15px; font-weight: 200; ">Stocks: <?php echo $results['product_stock'];?></strong>
                                
                                    <div class="card" style="width: 18rem; height: 100%">
                                        <?php echo '<img src="images/productImages/'.$results['product_picture'].'" width="100%" height="130"  >'; ?>
                                    
                                    <div class="card-body">
                                        <div class="headerTitle" style="position: relative; width: 100%;">
                                        <h5 class="card-title" style="width: 170px; margin: 0; margin-right:0;  display: inline-block;"><?php echo $results['product_name'];?> </h5>
                                        <p style="color: #ff3b49; position: relative;  float: right; font-size: 15px; display: inline-block;">₱ <?php echo $results['product_price'];?></p> 
                                        </div>
                                        
                                        <hr style="margin: 5px;">
                                        <p style="font-size: 13px; color: #000; font-weight: 100;"><?php echo $results['product_desc'];?></p>
                                        <hr>
                                        <form method="post">
                                            <button type="submit" name="ActionBTN" class="btnCstm"><i class="fas fa-shopping-cart"></i> Order now</button> 
                                        </form>
                                
                                    </div>
                                </div>
                                    
                                </div>
                            </div>
                        <?php }
                          }
                          else{
                              echo 'No data record';
                          }?>
                            
                                    
                           
                   
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="beautyProducts"><br>
                <div class="container">
                  
                        <?php 
                              if($rowCount = mysqli_num_rows($queryBeautyPro)>0)
                              {
                        while($results = mysqli_fetch_array($queryBeautyPro)) {?>
                            <div class="col-md mt-3">
                                <div class="perfume-card" data-aos="fade-up">
                                <span class="hot">HOT</span>
                                <strong style="text-shadow: 0 0 10px #000; position: absolute; left:0; z-index: 999; color: #fff; padding: 10px 10px; font-size: 15px; font-weight: 200; ">Stocks: <?php echo $results['product_stock'];?></strong>
                                
                                    <div class="card" style="width: 18rem; height: 100%">
                                        <?php echo '<img src="images/productImages/'.$results['product_picture'].'" width="100%" height="130"  >'; ?>
                                    
                                    <div class="card-body">
                                        <div class="headerTitle" style="position: relative; width: 100%;">
                                        <h5 class="card-title" style="width: 170px; margin: 0; margin-right:0;  display: inline-block;"><?php echo $results['product_name'];?> </h5>
                                        <p style="color: #ff3b49; position: relative;  float: right; font-size: 15px; display: inline-block;">₱ <?php echo $results['product_price'];?></p> 
                                        </div>
                                        
                                        <hr style="margin: 5px;">
                                        <p style="font-size: 13px; color: #000; font-weight: 100;"><?php echo $results['product_desc'];?></p>
                                        <hr>
                                        <form method="post">
                                            <button type="submit" name="ActionBTN" class="btnCstm"><i class="fas fa-shopping-cart"></i> Order now</button> 
                                        </form>
                                    </div>
                                </div>
                                    
                                </div>
                            </div>
                        <?php }
                           }
                           else{
                               echo 'No data record';
                           }?>
                            
                                    
                           
                         
                        </div>
                   
                </div>

                
                <div role="tabpanel" class="tab-pane fade" id="Clothing"><br>
                <div class="container">
                  
                <?php 
                              if($rowCount = mysqli_num_rows($queryClothing)>0)
                              {
                        while($results = mysqli_fetch_array($queryClothing)) {?>
                            <div class="col-md mt-3">
                                <div class="perfume-card" data-aos="fade-up">
                                <span class="hot">HOT</span>
                                <strong style="text-shadow: 0 0 10px #000; position: absolute; left:0; z-index: 999; color: #fff; padding: 10px 10px; font-size: 15px; font-weight: 200; ">Stocks: <?php echo $results['product_stock'];?></strong>
                                
                                    <div class="card" style="width: 18rem; height: 100%">
                                        <?php echo '<img src="images/productImages/'.$results['product_picture'].'" width="100%" height="130"  >'; ?>
                                    
                                    <div class="card-body">
                                        <div class="headerTitle" style="position: relative; width: 100%;">
                                        <h5 class="card-title" style="width: 170px; margin: 0; margin-right:0;  display: inline-block;"><?php echo $results['product_name'];?> </h5>
                                        <p style="color: #ff3b49; position: relative;  float: right; font-size: 15px; display: inline-block;">₱ <?php echo $results['product_price'];?></p> 
                                        </div>
                                        
                                        <hr style="margin: 5px;">
                                        <p style="font-size: 13px; color: #000; font-weight: 100;"><?php echo $results['product_desc'];?></p>
                                        <hr>
                                        <form method="post">
                                            <button type="submit" name="ActionBTN" class="btnCstm"><i class="fas fa-shopping-cart"></i> Order now</button> 
                                        </form>
                                    </div>
                                </div>
                                    
                                </div>
                            </div>
                        <?php }
                           }
                           else{
                               echo 'No data record';
                           }?>
                            
                                    
                           
                         
                        </div>
                   
                </div>

                        
                <div role="tabpanel" class="tab-pane fade" id="appliances"><br>
                <div class="container">
                  
                      
                <?php 
                              if($rowCount = mysqli_num_rows($queryAppliances)>0)
                              {
                        while($results = mysqli_fetch_array($queryAppliances)) {?>
                            <div class="col-md mt-3">
                                <div class="perfume-card" data-aos="fade-up">
                                <span class="hot">HOT</span>
                                <strong style="text-shadow: 0 0 10px #000; position: absolute; left:0; z-index: 999; color: #fff; padding: 10px 10px; font-size: 15px; font-weight: 200; ">Stocks: <?php echo $results['product_stock'];?></strong>
                                
                                    <div class="card" style="width: 18rem; height: 100%">
                                        <?php echo '<img src="images/productImages/'.$results['product_picture'].'" width="100%" height="130"  >'; ?>
                                    
                                    <div class="card-body">
                                        <div class="headerTitle" style="position: relative; width: 100%;">
                                        <h5 class="card-title" style="width: 170px; margin: 0; margin-right:0;  display: inline-block;"><?php echo $results['product_name'];?> </h5>
                                        <p style="color: #ff3b49; position: relative;  float: right; font-size: 15px; display: inline-block;">₱ <?php echo $results['product_price'];?></p> 
                                        </div>
                                        
                                        <hr style="margin: 5px;">
                                        <p style="font-size: 13px; color: #000; font-weight: 100;"><?php echo $results['product_desc'];?></p>
                                        <hr>
                                        <form method="post">
                                            <button type="submit" name="ActionBTN" class="btnCstm"><i class="fas fa-shopping-cart"></i> Order now</button> 
                                        </form>
                                    </div>
                                </div>
                                    
                                </div>
                            </div>
                        <?php }
                           }
                           else{
                               echo 'No data record';
                           }?>
                            
                                    
                           
                         
                        </div>
                   
                </div>
            

                <div role="tabpanel" class="tab-pane fade" id="room4rent"><br>
                <div class="container">
                    
                        <?php  
                         if($rowCount = mysqli_num_rows($queryRoomforrent)>0)
                         {
                        while($results = mysqli_fetch_array($queryRoomforrent)) {?>
                            <div class="col-md mt-3">
                                <div class="perfume-card" data-aos="fade-up">
                                <span class="hot">HOT</span>
                                <strong style="text-shadow: 0 0 10px #000; position: absolute; left:0; z-index: 999; color: #fff; padding: 10px 10px; font-size: 15px; font-weight: 200; ">Stocks: <?php echo $results['product_stock'];?></strong>
                                
                                    <div class="card" style="width: 18rem; height: 100%">
                                        <?php echo '<img src="images/productImages/'.$results['product_picture'].'" width="100%" height="130"  >'; ?>
                                    
                                    <div class="card-body">
                                        <div class="headerTitle" style="position: relative; width: 100%;">
                                        <h5 class="card-title" style="width: 170px; margin: 0; margin-right:0;  display: inline-block;"><?php echo $results['product_name'];?> </h5>
                                        <p style="color: #ff3b49; position: relative;  float: right; font-size: 15px; display: inline-block;">₱ <?php echo $results['product_price'];?></p> 
                                        </div>
                                        
                                        <hr style="margin: 5px;">
                                        <p style="font-size: 13px; color: #000; font-weight: 100;"><?php echo $results['product_desc'];?></p>
                                        <hr>
                                        <form method="post">
                                            <button type="submit" name="ActionBTN" class="btnCstm"><i class="fas fa-shopping-cart"></i> Order now</button> 
                                        </form>
                                    </div>
                                </div>
                                    
                                </div>
                            </div>
                        <?php }
                         }
                         else{
                             echo 'No data record';
                         }?>
                            
                                    
                           
                         
                        </div>
                 
                </div>

                <div role="tabpanel" class="tab-pane fade" id="lot4sale"><br>
                <div class="container">
                  
                        <?php  
                           if($rowCount = mysqli_num_rows($queryLotforsale)>0)
                           {
                        while($results = mysqli_fetch_array($queryLotforsale)) {?>
                            <div class="col-md mt-3">
                                <div class="perfume-card" data-aos="fade-up">
                                <span class="hot">HOT</span>
                                <strong style="text-shadow: 0 0 10px #000; position: absolute; left:0; z-index: 999; color: #fff; padding: 10px 10px; font-size: 15px; font-weight: 200; ">Stocks: <?php echo $results['product_stock'];?></strong>
                                
                                    <div class="card" style="width: 18rem; height: 100%">
                                        <?php echo '<img src="images/productImages/'.$results['product_picture'].'" width="100%" height="130"  >'; ?>
                                    
                                    <div class="card-body">
                                        <div class="headerTitle" style="position: relative; width: 100%;">
                                        <h5 class="card-title" style="width: 170px; margin: 0; margin-right:0;  display: inline-block;"><?php echo $results['product_name'];?> </h5>
                                        <p style="color: #ff3b49; position: relative;  float: right; font-size: 15px; display: inline-block;">₱ <?php echo $results['product_price'];?></p> 
                                        </div>
                                        
                                        <hr style="margin: 5px;">
                                        <p style="font-size: 13px; color: #000; font-weight: 100;"><?php echo $results['product_desc'];?></p>
                                        <hr>
                                        <form method="post">
                                            <button type="submit" name="ActionBTN" class="btnCstm"><i class="fas fa-shopping-cart"></i> Order now</button> 
                                        </form>
                                    </div>
                                </div>
                                    
                                </div>
                            </div>
                        <?php }
                         }
                         else{
                             echo 'No data record';
                         }?>
                            
                                    
                           
                         
                        </div>
             
                </div>
            

                <div role="tabpanel" class="tab-pane fade" id="more"><br>
                <div class="container">
                    
                        <?php 
                            if($rowCount = mysqli_num_rows($queryMore)>0)
                            {
                        while($results = mysqli_fetch_array($queryMore)) {?>
                            <div class="col-md mt-3">
                                <div class="perfume-card" data-aos="fade-up">
                                <span class="hot">HOT</span>
                                <strong style="text-shadow: 0 0 10px #000; position: absolute; left:0; z-index: 999; color: #fff; padding: 10px 10px; font-size: 15px; font-weight: 200; ">Stocks: <?php echo $results['product_stock'];?></strong>
                                
                                    <div class="card" style="width: 18rem; height: 100%">
                                        <?php echo '<img src="images/productImages/'.$results['product_picture'].'" width="100%" height="130" >'; ?>
                                    
                                    <div class="card-body">
                                        <div class="headerTitle" style="position: relative; width: 100%;">
                                        <h5 class="card-title" style="width: 170px; margin: 0; margin-right:0;  display: inline-block;"><?php echo $results['product_name'];?> </h5>
                                        <p style="color: #ff3b49; position: relative;  float: right; font-size: 15px; display: inline-block;">₱ <?php echo $results['product_price'];?></p> 
                                        </div>
                                        
                                        <hr style="margin: 5px;">
                                        <p style="font-size: 13px; color: #000; font-weight: 100;"><?php echo $results['product_desc'];?></p>
                                        <hr>
                                        <form method="post">
                                            <button type="submit" name="ActionBTN" class="btnCstm"><i class="fas fa-shopping-cart"></i> Order now</button> 
                                        </form>
                                    </div>
                                </div>
                                    
                                </div>
                            </div>
                        <?php }
                        }
                        else{
                            echo 'No data record';
                        }
                        ?>
                            
                                    
                           
                         
                        </div>
                 
                </div>
            </div>
    </div>

    <div class="container-fluid custom-BGredpink mt-5" id="delivery-schedule" >
        <div class="container p-0 custom-inner-Deliveryschedule mb-5" data-aos="flip-up">
            <h1>Delivery Schedule</h1>
            <h4><?php $viewTitle = new viewHeaderTitle();
                $viewTitle->viewHeader();
            ?></h4>

            <?php 
                $view = new viewScheduleAsUser();
                $view->viewSched();
            ?>

        </div>
    </div>

    <div class="container-fluid p-0" id="contact-aboutUs">
        <div class="main-combo">
            <div class="hidden-items">

                <div class="hidden-aboutus">
                    <h5>About</h5>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi harum, vel maiores possimus tempore corporis ducimus accusamus vitae sequi velit!</p>
                </div>

                
                <div class="hidden-contacts">
                <h5>Contacts</h5>
                    <img src="images/icons/email_icon.png" alt="">
                    <span>cristinalaranjo2018@gmail.com</span>
                </div>
                <div class="hidden-contacts">
                    <img src="images/icons/address_icon.png" alt="">
                    <span>La Almirah Crest Barangay Cogon Poblacion, Liloan, 6002 Cebu</span>
                </div>
                <div class="hidden-contacts">
                <img src="images/icons/cp_icon.png" alt="">
                    <span>+63 917 322 6660</span>
                </div>
                <div class="hidden-contacts">
                <img src="images/icons/fb_icon.png" alt="">
                    <a href="https://web.facebook.com/SoftySingh24/" target="blank">SoftySingh24</a>
                </div>
                <div class="hidden-contacts">
                <img src="images/icons/messenger_icon.png" alt="">
                    <a href="https://web.facebook.com/messages/t/" target="blank">SoftySingh24</a>
                </div>
                


                 

            </div>
       
        
        <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col p-0">
                            <div class="aboutUs" data-aos="fade-right">
                                <h5>About us</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque ipsum veniam omnis debitis, porro, vitae provident ex tempora cupiditate quisquam tempore amet exercitationem eum quia hic delectus pariatur aliquid eaque?</p>
                            </div>
                        </div>
                        <div class="col p-0">
                            <div class="contact" data-aos="fade-left">
                                <h5>Contact</h5>
                                <div class="inner-contact">
                                    <img src="images/icons/email_icon.png" alt="">
                                    <span>cristinalaranjo2018@gmail.com</span>
                                </div>
                                <div class="inner-contact">
                                <img src="images/icons/address_icon.png" alt="">
                                    <span>La Almirah Crest Barangay Cogon Poblacion, Liloan, 6002 Cebu</span>
                                </div>
                                <div class="inner-contact">
                                <img src="images/icons/cp_icon.png" alt="">
                                    <span>+63 917 322 6660</span>
                                </div>
                                <div class="inner-contact">
                                <img src="images/icons/fb_icon.png" alt="">
                                <a href="https://web.facebook.com/SoftySingh24/" target="blank">SoftySingh24</a>
                                </div>
                                <div class="inner-contact">
                                <img src="images/icons/messenger_icon.png" alt="">
                                <a href="https://web.facebook.com/SoftySingh24/" target="blank">SoftySingh24</a>
                                </div>
                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="footer">
            <div class="contactAdmin" style="margin-top: 70px;">
                    <h4>Social Media</h4>
                    <a href="#">Facebook</a>
                    <a href="#">Messenger</a>
                    <a href="#">Facebook</a>
                </div>

                <div class="contactAdmin" style="margin-top: 70px;">
                    <h4>Address</h4>
                    <a href="https://www.google.com/maps/place/La+Almirah+Crest/@10.4080366,123.9841345,17z/data=!3m1!4b1!4m5!3m4!1s0x33a9bcd8250403bb:0x4593539460bd906f!8m2!3d10.4080366!4d123.9863232" target="blank">La Almirah Crest, Barangay Cogon Poblacion, Liloan, Cebu</a>

                </div>

                <div class="contactAdmin" style="margin-right: 20px; margin-top: 70px;">
                    <h4>Service</h4>
                    <span>Deliver</span>
                    <span>Pick up</span>
                </div>
            <div class="imgLOGO">
         
                        <a href="#home"><img src="images/1_softyLOGO.png"></a>
                        <p>BOANG Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis fuga repellendus excepturi vel exercitationem impedit eaque possimus aperiam voluptatum ab voluptatibus soluta repellat sequi molestias, qui placeat reiciendis nisi quasi!</p>
                        <span>Copyright • Allright Reserve 2020</span>	&copy;
                    </div>
            </div>
        </div>
    </div>

    <div class="rd-btn">
        <a href="#"><i class="fas fa-chevron-up"></i></a>
    </div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>

    <script>
        AOS.init();
    </script>
    

</body>
</html>