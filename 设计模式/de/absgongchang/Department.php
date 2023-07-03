<?php

class Department {


    private $id = null;
    public function setId($id){
        $this->id = $id;
    }

    public function getId(){

        return $this->id;
    }

    private $name = null;
    public function setName($name){
        $this->name = $name;
    }

    public function getName(){

        return $this->name;
    }

    
}