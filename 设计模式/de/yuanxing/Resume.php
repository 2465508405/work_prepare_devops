<?php

include_once("./Company.php");
class Resume {

    private $name;
    private $sex;
    private $age;
    private $timeArea;
    public $company;

    function __construct($name)
    {
        $this->name = $name;
        $this->company = new Company();
    }

    public function setPersonalInfo($sex,$age){
        $this->age = $age;
        $this->sex = $sex;
    }
    private $infoarr;

    public function setInfo($info){
        $this->infoarr[] = $info;
    }
    public function setWorkExperience($timeArea,$company){
        $this->timeArea = $timeArea;
        $this->company->setName($company);
    }

    public function display(){
        echo $this->name.'.'.$this->sex.' '.$this->age."\n";
        echo $this->timeArea." ".$this->company->getName()."\n";
        print_r($this->infoarr);
    }

    function __clone(){
        $this->company =  clone $this->company;
    }
}