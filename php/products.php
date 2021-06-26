<?php 
    require_once 'init.php';
    require_once '../class/database.php';

    
    submitProduct();
    F_deleteProduct();
    require_once 'adminSession.php';



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css" style="text/css">
    <link rel="stylesheet" href="../css/productsStyle.css" style="text/css">
    <script src="https://kit.fontawesome.com/5caef3d764.js" crossorigin="anonymous"></script>
</head>
<body>
    

    <div class="container-fluid p-0 shadow">
        <nav class="navbar navbar-expand-lg ">
        
                <div class="cstm_productsHead p-2"><a href="adminPage.php"><i class="fas fa-arrow-left"></i></a> Products</div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"><i class="fas fa-bars" style="font-size: 30px;"></i></span>
                    </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                    
                    <button class="btn  btn-success float-right mt-2 " type="submit"><i class="fas fa-plus"></i> Add Newest Products</button>
                    <button class="btn btn-success mt-2" type="button" data-toggle="modal" data-target="#addProductModal"><i class="fas fa-cart-plus"></i> Add Product</button>

                    </ul>
                    
                </div>
        </nav>
    </div>

    

    <div class="container-fluid mt-5">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" role="tab" data-toggle="tab" href="#Foods">Foods</a>
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

                <div role="tabpanel" class="tab-pane fade show active" id="Foods" ><br>
                    <?php 
                        $viewPerfume = new viewFoodsProducts();
                        $viewPerfume->viewPerfume();
                    ?>
                </div>

                <div role="tabpanel" class="tab-pane fade show" id="beautyProducts" ><br>
                    <?php 
                        $viewBeautyProducts = new viewBeautyPro();
                        $viewBeautyProducts->viewBeauty();
                    ?>
                </div>
            
                <div id="Clothing" role="tabpanel" class="tab-pane fade show"  ><br>
                   <?php $viewClothing = new viewClothing(); $viewClothing->viewClothingProducts();?>
                </div>

                <div role="tabpanel" class="tab-pane fade show" id="appliances" ><br>
                    <?php $viewAppliancesProducts = new viewAppliances(); $viewAppliancesProducts->viewAppliancesProducts();?>
                </div>

                <div role="tabpanel" class="tab-pane fade" id="room4rent"><br>
                    <?php 
                        $viewRoom = new viewRoomForRent();
                        $viewRoom->viewRoomRent();
                    ?>
                </div>

                <div role="tabpanel" class="tab-pane fade" id="lot4sale"><br>
                    <?php 
                        $viewLotSale = new viewLotForSale();
                        $viewLotSale->viewLot();
                    ?>
                </div>
            

                <div role="tabpanel" class="tab-pane fade" id="more"><br>
                    <?php 
                        $viewMoreprod = new viewMoreProducts();
                        $viewMoreprod->viewMore();
                    ?>
                </div>
            </div>
    </div>






    <!-- Add Product Modal -->
<div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="size" value="1000000">
            <input type="file" name="image">
         
                <div class="form-group mt-1">
                <br>
                    <label for="inputState">Select Products to Add</label>
                    <select name="selectToAddProduct" class="custom-select">
                        <option selected>Open this select menu</option>
                        <option value="Foods">Foods</option>
                        <option value="Beauty Products">Beauty Products</option>
                        <option value="Clothing">Clothing</option>
                        <option value="Appliances">Appliances</option>
                        <option value="Lot For Sale">Lot 4 Sale</option>
                        <option value="Room For Rent">Room 4 Rent</option>
                        <option value="More">More</option>
                    </select>
                </div>
                <label for="exampleFormControlTextarea1">Product Name</label>
                <input name="productName" type="text" class="form-control"  required><br>

                <div class="row">
                    <div class="col">
                    <label for="exampleFormControlTextarea1">Price</label>
                    <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Php</span>
                    </div>
                    <input name="productPrice" type="number" class="form-control" aria-label="Amount (to the nearest dollar)" required>
                    <div class="input-group-append">
                        <span class="input-group-text">.00</span>
                    </div>
                    </div>
                
                    </div>
                    <div class="col">
                    <label for="exampleFormControlTextarea1">Stocks</label>
                    <input name="productStocks" type="number" class="form-control" required>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Short Description of the product</label>
                    <textarea name="productDesc" class="form-control" id="exampleFormControlTextarea1" rows="3" ></textarea>
                </div>
       

            <div class="modal-footer">
                
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button name="submitProduct" type="submit" class="btn btn-primary">Confirm</button>
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
        $(Document).ready(function(){
            $('.toast').toast('show');
        })
    </script>
</body>
</html>