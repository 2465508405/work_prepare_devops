<?php


include_once("./Colleague.php");
class ConcreteColleague1 extends Colleague{


    public function send($message){
        $this->mediator->send($message,$this);
    }

    public function notify($message){

        echo "ConcreteColleague1".$message."\n";
    }
}