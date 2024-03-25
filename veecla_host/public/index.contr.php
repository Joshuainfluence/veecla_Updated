<?php 
require_once __DIR__. "/../config/session.php";
class Location {
    private $location;

    public function __construct($location)
    {
        $this->location = $location;
    }

    private function isEmpty($location){
        if (empty($location)) {
            return false;
        }else{
            return true;
        }
    }

    private function set_message($type, $message)
    {
        $_SESSION[$type] = $message;
    }

    public function location(){
        if ($this->isEmpty($this->location) == false) {
            $this->set_message("error", "Country cannot be empty");
            exit();
            header("location: ../index.php");
        }

        
    }
}