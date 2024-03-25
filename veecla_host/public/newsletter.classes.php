<?php 

require_once __DIR__. "/../config/dbh.php";

class Newsletter extends Dbh{
    protected function createNewsletter($topic, $content, $information, $image){
        $sql = "INSERT INTO newsletters (topic, content, information, newImage) VALUES (?, ?, ?, ?)";
        $stmt = $this->connection()->prepare($sql);

        if (!$stmt->execute([$topic, $content, $information, $image])) {
            $stmt = null;
            exit();
        }

        $stmt = null;
    }

    protected function newsletterDisplay($id){
        $sql = "SELECT * FROM newsletters WHERE id != ?";
        $stmt = $this->connection()->prepare($sql);
        if (!$stmt->execute([$id])) {
            $stmt = null;
            exit();
        }

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}