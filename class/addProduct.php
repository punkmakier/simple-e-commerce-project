<?php 
    class addProduct extends config{
        public $productType;
        public $productName;
        public $productPrice;
        public $productStocks;
        public $productDesc;
        public $productImage;
        public $totalInvest;

     


        public function __construct($productType,$productName,$productPrice,$productStocks,$totalInvest,$productDesc,$productImage)
        {
            $this->productType = $productType;
            $this->productName = $productName;
            $this->productPrice = $productPrice;
            $this->productStocks = $productStocks;
            $this->totalInvest = $totalInvest;
            $this->productDesc = $productDesc;
            $this->productImage = $productImage;

        }


        public function insertImage()
        {
            $con = $this->connection();
            $sqlInsert = "INSERT INTO `products` (`product_type`,`product_name`,`product_price`,`product_stock`,`total_invest`,`product_desc`,`product_picture`) VALUES ('$this->productType','$this->productName',' $this->productPrice','$this->productStocks',' $this->totalInvest',' $this->productDesc','$this->productImage')";
            $data = $con->prepare($sqlInsert);
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