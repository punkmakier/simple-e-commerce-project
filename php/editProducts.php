<?php
    require_once 'init.php';
    require_once 'adminSession.php';
    if(isset($_GET['editProducts']))
    {
       $proId = $_GET['editProducts'];

        
        $viewProductByID = new viewToUpdateProducts($proId);

    }

    F_updateProducts();
    
    if(isset($_POST['backBtn']))
    {
        header("Location: products.php");
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css" style="text/css">
    <link rel="stylesheet" href="../css/editProductsStyle.css" style="text/css">
    <script src="https://kit.fontawesome.com/5caef3d764.js" crossorigin="anonymous"></script>
</head>
<body>

    <div class="background">

        <div class="outer-form">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="uploadImage">
                    <?php  $viewProductByID->viewProduct_IMAGEByID();?>
                </div><br>
                    <div class="col-md-7 p-0">
                    <label for="inputState">Select Products to Add</label>
                    <select name="updateProductType" class="custom-select">
                        <option selected value="<?php  $viewProductByID->viewProduct_TYPEByID();?>"><?php  $viewProductByID->viewProduct_TYPEByID();?></option>
                        <option value="Perfume">Perfume</option>
                        <option value="Tuna">Tuna</option>
                        <option value="LotForSale">Lot 4 Sale</option>
                        <option value="RoomForRent">Room 4 Rent</option>
                        <option value="More">More</option>
                    </select>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Product Name</label>
                        <input name="updatePname" type="text" class="form-control" id="exampleFormControlInput1" value="<?php $viewProductByID->viewProduct_NAMEByID();?>">
                    </div>

                    <div class="row">
                    <div class="col">
                    <label for="exampleFormControlTextarea1">Price</label>
                    <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Php</span>
                    </div>
                    <input name="updatePprice" type="number" class="form-control" aria-label="Amount (to the nearest dollar)" value="<?php  $viewProductByID->viewProduct_PRICEByID();?>">
                    <div class="input-group-append">
                        <span class="input-group-text">.00</span>
                    </div>
                    </div>
                
                    </div>
                    <div class="col">
                    <label for="exampleFormControlTextarea1">Stocks</label>
                    <input name="updatePstocks" type="number" class="form-control" value="<?php  $viewProductByID->viewProduct_STOCKSByID();?>">
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Short Description of the product</label>
                    <textarea name="updatePdesc" class="form-control" id="exampleFormControlTextarea1" rows="3"><?php $viewProductByID->viewProduct_DESCByID();?></textarea>
                </div>

                <button name="backBtn" class="btn btn-danger">Back</button>
                <button name="btnUpdate" type="submit"class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>