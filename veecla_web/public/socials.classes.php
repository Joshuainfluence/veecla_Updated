<?php 

require_once __DIR__. "/../config/dbh.php";

class Socials extends Dbh{
    protected function createSocials($topic, $link, $image){
        $sql = "INSERT INTO socials (topic, link, postImage) VALUES (?, ?, ?)";
        $stmt = $this->connection()->prepare($sql);

        if (!$stmt->execute([$topic, $link, $image])) {
            $stmt = null;
            exit();
        }

        $stmt = null;
    }

    protected function socialsDisplay($id){
        $sql = "SELECT * FROM socials WHERE id != ?";
        $stmt = $this->connection()->prepare($sql);
        if (!$stmt->execute([$id])) {
            $stmt = null;
            exit();
        }

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}