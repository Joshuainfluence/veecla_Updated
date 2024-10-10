<?php

require_once __DIR__ . "/../config/dbh.php";

class AdminProfileStaff extends Dbh
{
    protected function createAdminStaff()
    {
    }

    protected function displayAdminStaff($username)
    {
        $sql = "SELECT * FROM admin WHERE username = ?";
        $stmt = $this->connection()->prepare($sql);
        if (!$stmt->execute([$username])) {
            $stmt = null;
            exit();
        }

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    protected function displayAdminStaffEdit($id)
    {
        $sql = "SELECT * FROM admin WHERE id = ?";
        $stmt = $this->connection()->prepare($sql);
        if (!$stmt->execute([$id])) {
            $stmt = null;
            exit();
        }

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    protected function adminProfileSettingsUpdate($fullname, $email, $username, $password, $office, $mobile, $address, $image, $id)
    {
        $sql = "UPDATE admin SET fullname = ?, email = ?, username = ?, password = ?, office = ?, mobile = ?, address = ?, image = ? WHERE id = ?";
        $stmt = $this->connection()->prepare($sql);
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        if (!$stmt->execute([$fullname, $email, $username, $hashedPassword, $office, $mobile, $address, $image, $id])) {
            $stmt = null;
            exit();
        }

        $stmt = null;
    }
}
