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

    public function existProduct(){
        if ($this->productId == 0) {
            exit();
        }

        return $this->productExist($this->productId);
    }
}