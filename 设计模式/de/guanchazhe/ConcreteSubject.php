<?php

include_once "./Subject.php";
class ConcreteSubject extends Subject{

    private $subjectState;

    public function setState($state){

        $this->subjectState = $state;
    }

    public function getState(){

        return $this->subjectState;
    }

    public function breakfast(){

        $this->notify();
    }
}