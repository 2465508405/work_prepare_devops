<?php

include_once("./Mediator.php");
class ConcreteMediator extends  Mediator{


    private $colleague1;
    private $colleague2;

    public function setColleague1(Colleague $colleague){
        $this->colleague1 = $colleague;
    }

    public function setColleague2(Colleague $colleague){

        $this->colleague2 = $colleague;
    }

    public function send($message ,Colleague $colleague){

        if($this->colleague1 == $colleague){

            $this->colleague1->notify($message);
        } else {

            $this->colleague2->notify($message);
        }
    }
}