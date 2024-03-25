<?php

class SelectCartContr extends Cart
{
    private $productId;


    public function __construct($productId)
    {
        $this->productId = $productId;
    }
    public function selectcart2()
    {
        if (!$this->selectCart($this->productId)) {
            header("location: ../cart.php?fatal");
            exit();
        }

        return $this->selectCart($this->productId);
    }

    // method to display ordered products to the admin pagae

    public function productOrdered(){
        if ($this->productId == 0) {
            exit();
        }

        $result = $this->OrderedProducts($this->productId);
        return $result;
    }

    
}

class ProductExistContr extends Cart {
    private $productId;
    private $userid;

    public function __construct($productId, $userid)
    {
        $this->productId = $productId;
        $this->userid = $userid;
    }

    public function existProduct(){
        if ($this->productId == 0 && $this->userid == 0) {
            exit();
        }

        return $this->productExist($this->productId, $this->userid);
    }
}