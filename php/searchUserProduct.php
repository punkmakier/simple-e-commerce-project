<?php
    require_once 'init.php';
    require_once '../class/database.php';

    $item;
    if(isset($_GET['searchProduct']))
    {

        $item = $_GET['searchProduct'];

        $querySearch = "SELECT * FROM `products` WHERE `product_type` LIKE '$item%' OR `product_name` LIKE '$item%'";
        $querySearch = mysqli_query($connection,$querySearch);
    
    }

    if(!isset($_GET['searchProduct']))
    {
        header("Location: ../index.php");
    }

    else
    {
        $_GET['searchProduct'] = "No results found.";
    }


  




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css" style="text/css">
    <link rel="stylesheet" href="../css/userSearchStyle.css" style="text/css">
    <script src="https://kit.fontawesome.com/5caef3d764.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid p-5 cstmContainer">

        <h1 style="font-size: 50px;" class="display-3">Search result of : <strong> <?php echo $item; ?> </strong></h1>
        <hr><br>

        <div class="mainBody">
        <?php 
                             if($rowCount = mysqli_num_rows($querySearch)>0)
                             {
                        while($results = mysqli_fetch_array($querySearch)) {?>
                     
                            <div class="col-md mt-3">
                                <div class="perfume-card" data-aos="fade-up">
                                <span class="hot">HOT</span>
                                <strong style="text-shadow: 0 0 10px #000; position: absolute; left:0; z-index: 999; color: #fff; padding: 10px 10px; font-size: 15px; font-weight: 200; ">Stocks: <?php echo $results['product_stock'];?></strong>
                                
                                    <div class="card" style="width: 18rem; height: 100%">
                                        <?php echo '<img src="../images/productImages/'.$results['product_picture'].'" width="100%" height="130"  >'; ?>
                                    
                                    <div class="card-body">
                                        <div class="headerTitle" style="position: relative; width: 100%;">
                                        <h5 class="card-title" style="width: 170px; margin: 0; margin-right:0;  display: inline-block;"><?php echo $results['product_name'];?> </h5>
                                        <p style="color: #ff3b49; position: relative;  float: right; font-size: 15px; display: inline-block;">₱ <?php echo $results['product_price'];?></p> 
                                        </div>
                                        
                                        <hr style="margin: 5px;">
                                        <p class="desc" style="font-size: 13px; color: #000; font-weight: 100;"><?php echo $results['product_desc'];?></p>
                                        <hr>
                                        <form action="orderproduct.php" method="get">
                                            <input name="product" type="hidden" value="<?php echo $results['id'];?>">
                                            <button type="submit"class="btnCstm"><i class="fas fa-shopping-cart"></i> Order now</button>
                                        </form>

                           
                                  
                                    </div>
                                </div>
                                    
                                </div>
                            </div>
                        <?php }
                          }
                

                          else{
                              echo '<h1 class="display-4">No results found.</h1>';
                          }?>
                                
        </div>
    </div>


        <footer>
            <div class="imgLOGO">
                <div class="contact">
                    <h4>Social Media</h4>
                    <a href="#">Facebook</a>
                    <a href="#">Messenger</a>
                    <a href="#">Facebook</a>
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