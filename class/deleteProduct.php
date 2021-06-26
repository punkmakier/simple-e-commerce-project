<?php 
    class deleteProduct extends config{

        public $productID;

        public function __construct($productID)
        {
            $this->productID = $productID;
        }

        public function deletingProduct()
        {
            $con = $this->connection();
            $sqlQueryDelete = "DELETE FROM `products` WHERE id = $this->productID";
            $data = $con->prepare($sqlQueryDelete);
            
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