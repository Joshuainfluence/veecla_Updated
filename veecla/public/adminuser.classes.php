<?php 

require_once __DIR__. "/../config/dbh.php";

class AdminUser extends Dbh{
    protected function adminUser($is_admin){
        $sql = "SELECT id, username, email, created_at, (NOW() - last_activity) as seconds_since_activity, fullName, profileImage FROM users WHERE is_admin = ?";
        $stmt = $this->connection()->prepare($sql);
        if (!$stmt->execute([$is_admin])) {
            $stmt = null;
            // header("Location: index.php?errorviewingusers");
            exit();
        }
        
        $details = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // the print_r($details) is actual working and it is getting the users from the database. So we are actually clear here
        // print_r($details);
        return $details;
        
    }

    protected function totalUsers($is_admin){
        $sql = "SELECT id FROM users WHERE is_admin = ?";
        $stmt = $this->connection()->prepare($sql);
        if (!$stmt->execute([$is_admin])) {
            $stmt = null;
            exit();
        }

        $details = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $details;
    }

    protected function deleteUser($id){
        $sql = "DELETE FROM users WHERE id = ?";
        $stmt = $this->connection()->prepare($sql);
        if (!$stmt->execute([$id])) {
            $stmt = null;
            exit();
            header("location: index.php?error");
        }

        $stmt = null;
    }

    protected function notifyUser($topic, $content, $userid){
        $sql = "INSERT INTO notifications (topic, content, userId) VALUES (?, ?, ?)";
        $stmt = $this->connection()->prepare($sql);
         if (!$stmt->execute([$topic, $content, $userid])) {
            $stmt = null;
            header("Location: index.php?notification failed");
            exit();
         }

         $stmt = null;

    }
}