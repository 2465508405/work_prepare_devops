<?php

class Context {

    private $input;

    public function setInput($input){

        $this->input = $input;
    }

    public function getInput(){

        return $this->input;
    }

    private $output;
    public function setOutput($output){
        $this->output = $output;
    }

    public function getOutput(){

        return $this->output;
    }
}