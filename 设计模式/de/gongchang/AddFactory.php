<?php

include_once("./IFactory.php");
include_once "./AddOperation.php";
class AddFactory implements IFactory{


    public function createOperation()
    {
        return new AddOperation();
    }

    public function createDepartment() {

    	return '';
    }

   
}