<?php 

class ProductCategoryContr extends Product{
    private $category;

    public function __construct($category)
    {
        $this->category = $category;
    }

    public function categoryProduct(){
        if (empty($this->category)) {
            exit();
        }

        $data = $this->productCategory($this->category);
        return $data;
    }

    public function productSingle(){
        if ($this->category == 0) {
            exit();
        }

        $data = $this->singleProduct($this->category);
        return $data;
    }
}