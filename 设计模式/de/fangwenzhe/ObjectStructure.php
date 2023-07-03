<?php

include_once "./Person.php";
include_once "./Action.php";
class ObjectStructure{


    private $person = [];

    public function attach(Person $person){

        array_push($this->person,$person);
    }

    public function remove(Person ) {

    }
    public function display(Action $visitor){

        foreach($this->person as $person){

            $person->accept($visitor);
        }
    }
}