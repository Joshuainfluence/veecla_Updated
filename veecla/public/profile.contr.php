<?php
require_once __DIR__. "/../config/session.php";
class UserProfileContrVeecla extends UserProfileVeecla{
    private $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function userProfileShowVeecla(){
        if ($this->id == 0) {
            exit();
        }

         $result = $this->showUserProfileVeecla($this->id);
         return $result;
    }
}