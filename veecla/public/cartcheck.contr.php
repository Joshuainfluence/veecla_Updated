<?php 
require_once __DIR__ . "/../config/session.php";
class CartCheckContr extends Cart{
    private $userId;

    public function __construct($userId)
    {
        $this->userId = $userId;
    }

    public function cartChecker(){
        if ($this->userId == 0) {
            header("location: ../cart.php? invalid user");
            exit();
        }

        return $this->checkoutDisplay($this->userId);
    }
}