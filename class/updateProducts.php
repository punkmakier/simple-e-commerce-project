<?php 
    class updateProducts extends config{
        public $productType;
        public $productName;
        public $productPrice;
        public $productStocks;
        public $productDesc;
        public $productID;
        public $updateInvest;
     


        public function __construct($productType,$productName,$productPrice,$productStocks,$updateInvest,$productDesc,$productID)
        {
            $this->productType = $productType;
            $this->productName = $productName;
            $this->productPrice = $productPrice;
            $this->productStocks = $productStocks;
            $this->updateInvest = $updateInvest;
            $this->productDesc = $productDesc;
            $this->productID = $productID;
        }


        public function updateProd()
        {
            $con = $this->connection();
            $sqlUpdate = "UPDATE `products` SET `product_type`= '$this->productType',`product_name`= '$this->productName',`product_price`= '$this->productPrice',`product_stock`= '$this->productStocks',`total_invest` = '$this->updateInvest',`product_desc`= '$this->productDesc' WHERE `id` = $this->productID ";
            $data = $con->prepare($sqlUpdate);
      
   
            if($data->execute())
            {
                return true;
            }
            else
            {
                return false;
            }
        }
    }

?>