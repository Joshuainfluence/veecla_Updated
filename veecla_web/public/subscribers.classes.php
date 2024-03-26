<?php
require_once __DIR__. "/../config/dbh.php";

class Subscriber extends Dbh{
    protected function viewSubscribers($id){
        $sql = "SELECT * FROM subscribe WHERE id != ?";
        $stmt = $this->connection()->prepare($sql);
        if (!$stmt->execute([$id])) {
            $stmt = null;
            exit();
        }
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
}