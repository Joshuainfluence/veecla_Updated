<?php
require_once __DIR__ . "/../config/session.php";
require_once __DIR__ . "/../config/dbh.php";
class Cart extends Dbh
{
    protected function selectCart($id)
    {
        $sql = "SELECT * FROM products WHERE id = ?";
        $stmt = $this->connection()->prepare($sql);
        if (!$stmt->execute([$id])) {
            $stmt = null;
            header("Location: ../cart.php?error=connection");
            exit();
        }

        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    protected function AddtoCart($product_name, $product_price, $product_quantity, $users_id, $product_id, $product_image)
    {
        $sql = "INSERT INTO cart (product_name, product_price, product_quantity, users_id, product_id, product_image) VALUES (?, ?, ?, ?, ?, ?);";
        $stmt = $this->connection()->prepare($sql);
        if (!$stmt->execute([$product_name, $product_price, $product_quantity, $users_id, $product_id, $product_image])) {
            $stmt = null;
            header("Location: ../cart.php?error=inserting error");
            exit();
        }

        $stmt = null;
    }

    protected function checkoutDisplay($userId)
    {
        $sql = "SELECT * FROM cart WHERE users_id = ?";
        $stmt = $this->connection()->prepare($sql);
        if (!$stmt->execute([$userId])) {
            $stmt = null;
            header("Location: checkout.php? failed to display");
            exit();
        }

        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    protected function productExist($id)
    {
        $sql = "SELECT * FROM cart WHERE product_id = ? AND userid = ?";
        $stmt = $this->connection()->prepare($sql);
        if (!$stmt->execute([$id])) {
            $stmt = null;
            header("Location: checkout.php? failed to display");
            exit();
        }

        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    protected function deleteProduct($id)
    {
        $sql = "DELETE FROM cart WHERE id = ?";
        $stmt = $this->connection()->prepare($sql);
        if (!$stmt->execute([$id])) {
            $stmt = null;
            exit();
        }

        $stmt = null;
    }
}
