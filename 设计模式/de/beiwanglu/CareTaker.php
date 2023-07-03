<?php

include_once "./Memento.php";
//管理者

class CareTaker{


    private $memento;

    public function getMemento(){
  
        return $this->memento;
    }

    public function setMemento(Memento $memento){

        $this->memento = $memento;
    }
}