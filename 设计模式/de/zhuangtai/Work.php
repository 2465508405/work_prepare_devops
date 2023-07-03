<?php

include_once "./ForenoonState.php";
class Work {


    private $current;


    public function __construct(){
        $this->current = new ForenoonState();
    }

    private $hour;
    public function getHour(){
        return $this->hour;
    }
    public function setHour($hour)
    {
        $this->hour = $hour;
    }s

    private $finished = false;
    public function setTaskFinished($bool){

        $this->finished = $bool;
    }
    public function getTaskFinishedState(){

        return $this->finished;
    }

    public function setState(State $state)
    {
        $this->current = $state;
    }

    public function writeProgram(){
        $this->current->writeProgram($this);
    }
}