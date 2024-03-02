<?php

class CartContr extends Cart
{
    private $product_name;
    private $product_price;
    private $product_quantity;
    private $users_id;
    private $product_id;
    private $product_image;

    public function __construct($product_name, $product_price, $product_quantity, $users_id, $product_id, $product_image)
    {
        $this->product_name = $product_name;
        $this->product_price = $product_price;
        $this->product_quantity = $product_quantity;
        $this->users_id = $users_id;
        $this->product_id = $product_id;
        $this->product_image = $product_image;
    }

    public function addCart2()
    {
        return $this->AddtoCart($this->product_name, $this->product_price, $this->product_quantity, $this->users_id, $this->product_id, $this->product_image);
       header("location: checkout.php?successtocat");
    }
}
