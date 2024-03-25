<?php
// including our database connection
require_once __DIR__ . "/../config/dbh.php";

class Product extends Dbh
{
    // protected function addProducts($product_name, $product_description, $product_price, $product_info, $product_image){
    //     $sql = "INSERT INTO products(product_name, product_description, product_price, product_info, product_image) VALUES(?, ?, ?, ?, ?);";
    //     $stmt = $this->connect()->prepare($sql);
    //     if (!$stmt->execute([$product_name, $product_description, $product_price, $product_info, $product_image])) {
    //         $stmt = null;
    //         header("location: addProducts.php?error=connectionfailed");
    //         exit();
    //     }

    //     $details = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //     return $details;
    // }


    // method to insert products to the database
    protected function addProducts($product_name, $product_description, $product_price, $product_unit, $product_info, $product_image, $related_image, $applied_image)
    {
        $sql = "INSERT INTO products (product_name, product_description, product_price, product_unit, product_info, product_image, related_image, applied_image) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->connection()->prepare($sql);
        // $stmt->bindParam(':product_name', $product_name);
        // $stmt->bindParam(':product_description', $product_description);
        // $stmt->bindParam(':product_price', $product_price);
        // $stmt->bindParam(':product_info', $product_info);
        // $stmt->bindParam(':product_image', $product_image);

        if (!$stmt->execute([$product_name, $product_description, $product_price, $product_unit, $product_info, $product_image, $related_image, $applied_image])) {
            $stmt = null;
            header("location: addProducts.php?error=connectionfailed");
            exit();
        }

       $stmt = null;

        // Rest of your code...
    }

    // method to display all products information from the database
    protected function displayProducts($is_product)
    {
        $sql = "SELECT id, product_name, product_description, product_price, product_unit, product_info, product_image, related_image, applied_image FROM products WHERE is_product = ?";
        $stmt = $this->connection()->prepare($sql);

        if (!$stmt->execute([$is_product])) {
            $stmt = null;
            exit();
        }
        $details = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $details;
    }

    // method to display products, the latest 3 products
    protected function displayProducts3($is_product){
        $sql = "SELECT * FROM products WHERE is_product = ? ORDER BY dateAdded DESC LIMIT 3";
        $stmt = $this->connection()->prepare($sql);

        if (!$stmt->execute([$is_product])) {
            $stmt = null;
            exit();
        }
        $details = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $details;
    }

    // method to delete products from the database: products table
    protected function deleteProduct($id){
        $sql = "DELETE FROM products WHERE id = ?";
        $stmt = $this->connection()->prepare($sql);
        if (!$stmt->execute([$id])) {
            $stmt = null;
            exit();
            header("location: viewProducts.php?error");
        }

        $stmt = null;
    }
    protected function productCategory($category){
        $sql = "SELECT id, product_name, product_description, product_price, product_info, product_image, related_image, applied_image, product_unit FROM products WHERE product_category = ?";
        $stmt = $this->connection()->prepare($sql);

        if (!$stmt->execute([$category])) {
            $stmt = null;
            exit();
        }
        $details = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $details;
    }

    protected function singleProduct($id){
        $sql = "SELECT * FROM products WHERE id = ?";
        $stmt = $this->connection()->prepare($sql);
        if (!$stmt->execute([$id])) {
            $stmt = null;
            exit();
        }

        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }


    
}
