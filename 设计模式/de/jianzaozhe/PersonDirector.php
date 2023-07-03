<?php

include_once "./person.php";

class PersonDirector{


    private $personBuilder;

    function __construct($personBuilder)
    {
        $this->personBuilder = $personBuilder;
    }

    public function createPerson(){
        $this->personBuilder->BuildHead();
        $this->personBuilder->BuildBody();
        $this->personBuilder->BuildArmLeft();
        $this->personBuilder->BuildArmRight();
        $this->personBuilder->BuildLegLeft();
        $this->personBuilder->BuildLegRight();

        return new person();
    }


}