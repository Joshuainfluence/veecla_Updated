<?php 

// this class is to preview the products to the from the database to the admin page
// from the adminproductclasses.php file

class AdminProductViewContr extends AdminProduct{
    private $is_product;

    public function __construct($is_product)
    {
        $this->is_product = $is_product;
    }

    public function displayProducts2(){
        // This statment will return false so the next statement will run
        if ($this->is_product !== 0) {          
            exit();
        }
       
        $data1 = $this->displayProducts($this->is_product);
        return $data1;
       
    }
    public function displayProducts4(){
        if ($this->is_product !== 0) {          
            exit();
        }
       
        $data1 = $this->displayProducts3($this->is_product);
        return $data1;
       
    }

    public function displayProducts6(){
        if ($this->is_product !== 0) {          
            exit();
        }
       
        $data1 = $this->displayProducts5($this->is_product);
        return $data1;
       
    }
}