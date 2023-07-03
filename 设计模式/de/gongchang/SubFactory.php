<?php

include_once "./IFactory.php";
include_once "./SubOPeration.php";

class SubFactory implements IFactory{


    public function createOperation()
    {
        // TODO: Implement createOperation() method.
        return new SubOperation();
    }
}