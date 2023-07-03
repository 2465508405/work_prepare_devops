<?php


class Company {

    private $company;

    public function setName($name){

        $this->company = $name;
    }

    public function getName(){

        return $this->company;
    }

}