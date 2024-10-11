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
    public function userAdmin()
    {
        if ($this->is_admin !== 0) {
            exit();
        }

        $data = $this->adminUser($this->is_admin);
        return $data;
    }

    // for displaying the total user on the overview page
    public function UserTotal()
    {
        if ($this->is_admin !== 0) {
            exit();
        }

        $data = $this->totalUsers($this->is_admin);
        return $data;
    }
}

class NotifyUser extends AdminUser
{
    private $topic;
    private $content;
    private $userid;

    public function __construct($topic, $content, $userid)
    {
        $this->topic = $topic;
        $this->content = $content;
        $this->userid = $userid;
    }

    private function isEmpty()
    {
        if (empty($this->topic) || empty($this->content) || empty($this->userid)) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }

    private function set_message($type, $message)
    {
        $_SESSION[$type] = $message;
    }


    public function userNotify(){
        if ($this->isEmpty() == true) {
            $this->set_message("error", "Fields cannot be empty");
            header("Location: ../registration/signup.php?error=emptyfields");
            exit();
        }

        $this->notifyUser($this->topic, $this->content, $this->userid);
    }

    public function userEach(){
        if ($this->isEmpty() == true) {
            $this->set_message("error", "Fields cannot be empty");
            header("Location: ../registration/signup.php?error=emptyfields");
            exit();
        }
        $this->eachUser($this->userid);
    }
}


class NotifyUserSpec extends AdminUser
{
   
    private $userid;

    public function __construct($userid)
    {
     
        $this->userid = $userid;
    }

    private function isEmpty()
    {
        if (empty($this->userid)) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }

    private function set_message($type, $message)
    {
        $_SESSION[$type] = $message;
    }

    public function userEach(){
        if ($this->isEmpty() == true) {
            $this->set_message("error", "Fields cannot be empty");
            header("Location: ../registration/signup.php?error=emptyfields");
            exit();
        }
        $details = $this->eachUser($this->userid);
        return $details;
    }

    public function userEachSend(){
        if ($this->isEmpty() == true) {
            $this->set_message("error", "Fields cannot be empty");
            header("Location: ../registration/signup.php?error=emptyfields");
            exit();
        }
        $details = $this->eachUserSend($this->userid);
        return $details;
    }
}
