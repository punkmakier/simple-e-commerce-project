<?php 
    require_once 'database.php';

    class userSearchProduct{
    public $items;

    public function __construct($items)
    {
        $this->items;
    }

    public function searchingItems()
    {
        $querySearch = "SELECT * FROM `products` WHERE product_name = '$this->items' ";
        $querySearc= mysqli_query($connection,$queryPerfume);
    }


}
?>