<?php
    class orderProcess extends config{
        public $order_username;
        public $order_userPhone;
        public $order_productType;
        public $order_productName;
        public $order_productPrice;
        public $order_productQuantity;
        public $order_productAddress;
        public $order_productNotes;
        public $order_productOrderID;
        public $order_totalamount;

  

    
        public function __construct($order_username,$order_userPhone,$order_productOrderID,$order_productType,$order_productName,$order_productPrice,$order_productQuantity,$order_totalamount,$order_productAddress,$order_productNotes)
        {
            $this->order_username = $order_username;
            $this->order_userPhone = $order_userPhone;
            $this->order_productOrderID = $order_productOrderID;
            $this->order_productType = $order_productType;
            $this->order_productName = $order_productName;
            $this->order_productPrice = $order_productPrice;
            
            $this->order_productQuantity = $order_productQuantity;
            $this->order_totalamount = $order_totalamount;
            $this->order_productAddress = $order_productAddress;
            $this->order_productNotes = $order_productNotes;

  

        }

        public function insertOrder()
        {
            $con = $this->connection();
            $sqlInserOrder = "INSERT INTO `orderproducts` (`order_username`,`order_userPhoneNum`,`orderID`,`order_productType`,`order_productName`,`order_price`,`order_quantity`,`total_amount`,`order_address`,`order_notes`)
            VALUES ('$this->order_username','$this->order_userPhone','$this->order_productOrderID','$this->order_productType','$this->order_productName','$this->order_productPrice','$this->order_productQuantity','$this->order_totalamount','$this->order_productAddress','$this->order_productNotes')";

            $data = $con->prepare($sqlInserOrder);

            if($data->execute())
            {
                return true;
            }

            else{
                return false;
            }
        }
    }



?>