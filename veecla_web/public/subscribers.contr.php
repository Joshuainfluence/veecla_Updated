<?php 

class SubscriberContr extends Subscriber{
    private $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function subcribersView(){
        $result = $this->viewSubscribers($this->id);
        return $result;
    }
}