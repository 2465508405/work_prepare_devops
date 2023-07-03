<?php

class Memento{

    private $state;

    function __construct($state)
    {
        $this->state = $state;
    }


    public function getState(){
        return $this->state;
    }
}