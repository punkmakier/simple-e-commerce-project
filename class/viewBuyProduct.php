<?php 
    class viewBuyProduct extends config{
        public $id;



        public function __construct($id)
        {
            $this->id = $id;
        }

        public function orderProType()
        {
            $con = $this->connection();
            $sqlShow = "SELECT * FROM `products` WHERE `id` = $this->id";
            $data = $con->prepare($sqlShow);
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

        public function orderProName()
        {
            $con = $this->connection();
            $sqlShow = "SELECT * FROM `products` WHERE `id` = $this->id";
            $data = $con->prepare($sqlShow);
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


        public function orderProPrice()
        {
            $con = $this->connection();
            $sqlShow = "SELECT * FROM `products` WHERE `id` = $this->id";
            $data = $con->prepare($sqlShow);
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



        public function orderProPicture()
        {
            $con = $this->connection();
            $sqlShow = "SELECT * FROM `products` WHERE `id` = $this->id";
            $data = $con->prepare($sqlShow);
            $data->execute();

            $results = $data->fetchAll(PDO::FETCH_ASSOC);
    
            if($data->rowCount() > 0)
            {
                foreach($results as $result)
                {
                    echo $result['product_picture']; 

                }
                return true;
            }

            else{
                return false;
            }
        }
    }
?>