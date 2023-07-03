<?php


class User{

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

    public function setAge($age){

        $this->age = $age;
    }

    public function getAge($age){

        return $this->age;
    }


}