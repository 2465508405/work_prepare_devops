<?php

include_once "./Colleague.php";
class ConcreteColleague2 extends Colleague{

    public function send($message){

        $this->mediator->send($message,$this);
    }

    public function notify($message){

        echo "ConcreteColleague2".$message."\n";
    }
}