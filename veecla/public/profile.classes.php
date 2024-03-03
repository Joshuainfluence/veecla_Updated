<?php 
require_once __DIR__. "/../config/dbh.php";
require_once __DIR__. "/../config/session.php";

class UserProfileVeecla extends Dbh{
    protected function showUserProfileVeecla($id){
        $sql = "SELECT * FROM users WHERE id = ?";
        $stmt = $this->connection()->prepare($sql);

        if (!$stmt->execute([$id])) {
            $stmt = null;
            exit();
        }

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}