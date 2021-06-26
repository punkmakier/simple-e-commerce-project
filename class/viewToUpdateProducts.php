<?php 
    class viewToUpdateProducts extends config{
        public $productID;


        public function __construct($productID)
        {
            $this->productID = $productID;
        }

        public function viewProduct_TYPEByID()
        {
            $con = $this->connection();
            $sqlQueryDelete = "SELECT * FROM `products` WHERE id = $this->productID";
            $data = $con->prepare($sqlQueryDelete);
            $data->execute();

            $results = $data->fetchAll(PDO::FETCH_ASSOC);
    
            if($data->rowCount() > 0)
            {
                foreach($results as $result)
                {
                    echo $result['product_type']; 
                }
                return true;
            }

            else{
                return false;
            }
        }


        public function viewProduct_NAMEByID()
        {
            $con = $this->connection();
            $sqlQueryDelete = "SELECT * FROM `products` WHERE id = $this->productID";
            $data = $con->prepare($sqlQueryDelete);
            $data->execute();

            $results = $data->fetchAll(PDO::FETCH_ASSOC);
    
            if($data->rowCount() > 0)
            {
                foreach($results as $result)
                {
                    echo $result['product_name']; 
                }
                return true;
            }

            else{
                return false;
            }


        }



        public function viewProduct_IMAGEByID()
        {
            $con = $this->connection();
            $sqlQueryDelete = "SELECT * FROM `products` WHERE id = $this->productID";
            $data = $con->prepare($sqlQueryDelete);
            $data->execute();

            $results = $data->fetchAll(PDO::FETCH_ASSOC);
    
            if($data->rowCount() > 0)
            {
                foreach($results as $result)
                {
                    echo '<td><img src="../images/productImages/'.$result['product_picture'].'" width="75" height="75" style="margin-right: 30px;"></td>'; 
                }
                return true;
            }

            else{
                return false;
            }
        }


        public function viewProduct_PRICEByID()
        {
            $con = $this->connection();
            $sqlQueryDelete = "SELECT * FROM `products` WHERE id = $this->productID";
            $data = $con->prepare($sqlQueryDelete);
            $data->execute();

            $results = $data->fetchAll(PDO::FETCH_ASSOC);
    
            if($data->rowCount() > 0)
            {
                foreach($results as $result)
                {
                    echo $result['product_price']; 
                }
                return true;
            }

            else{
                return false;
            }
        }


        public function viewProduct_STOCKSByID()
        {
            $con = $this->connection();
            $sqlQueryDelete = "SELECT * FROM `products` WHERE id = $this->productID";
            $data = $con->prepare($sqlQueryDelete);
            $data->execute();

            $results = $data->fetchAll(PDO::FETCH_ASSOC);
    
            if($data->rowCount() > 0)
            {
                foreach($results as $result)
                {
                    echo $result['product_stock']; 
                }
                return true;
            }

            else{
                return false;
            }
        }


        public function viewProduct_DESCByID()
        {
            $con = $this->connection();
            $sqlQueryDelete = "SELECT * FROM `products` WHERE id = $this->productID";
            $data = $con->prepare($sqlQueryDelete);
            $data->execute();

            $results = $data->fetchAll(PDO::FETCH_ASSOC);
    
            if($data->rowCount() > 0)
            {
                foreach($results as $result)
                {
                    echo $result['product_desc']; 
                }
                return true;
            }

            else{
                return false;
            }
        }


    }



?>