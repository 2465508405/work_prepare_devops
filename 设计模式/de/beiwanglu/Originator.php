<?php


include_once "./Memento.php";
class Originator {

    //发起人
    private $state;

    public function setState($state){


        $this->state = $state;
    }

    public function getState(){

        return $this->state;
    }

    public function createMemento(){

        return new Memento($this->state);
    }

    public function setMemento(Memento $memento){

        $this->state = $memento->getState();
    }

    public function show(){

        echo "status ".$this->state."\n";
    }
}