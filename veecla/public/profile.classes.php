<?php 
require_once __DIR__. "/../config/dbh.php";
require_once __DIR__. "/../config/session.php";

class UserProfileVeecla extends Dbh{
    // method to display user profile
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
    
    protected function verifyUser($username){
        $sql = "SELECT * FROM users WHERE username = ?";
        $stmt = $this->connection()->prepare($sql);
        if (!$stmt->execute([$username])) {
            $stmt = null;
            exit();
        }
        $details = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $details;
    }


    // method for user to update their profile info, i.e settings
    
    protected function userProfileSettingsUpdate($fullname, $email, $username, $password, $phone , $address, $image, $id)
    {
        $sql = "UPDATE users SET fullname = ?, email = ?, username = ?, password = ?, phone = ?, address = ?, profileImage = ? WHERE id = ?";
        $stmt = $this->connection()->prepare($sql);
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        if (!$stmt->execute([$fullname, $email, $username, $hashedPassword, $phone, $address, $image, $id])) {
            $stmt = null;
            exit();
        }

        $stmt = null;
    }

}