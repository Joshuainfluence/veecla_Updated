<?php

class AdminUserContr extends AdminUser
{
    private $is_admin;

    public function __construct($is_admin)
    {
        $this->is_admin = $is_admin;
    }

    protected function is_admin_check()
    {
        $this->is_admin == 0;
    }



    // this function is working so well 
    public function userAdmin(){
        if ($this->is_admin !== 0) {          
            exit();
        }
       
        $data = $this->adminUser($this->is_admin);
        return $data;
       
    }

    // for displaying the total user on the overview page
    public function UserTotal(){
        if ($this->is_admin !== 0) {
            exit();
        }

        $data = $this->totalUsers($this->is_admin);
        return $data;
    }
}