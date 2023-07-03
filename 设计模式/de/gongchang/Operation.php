<?php

class Operation{

    protected $a = 0;
    protected $b = 0;
    public function setA($a){
        $this->a = $a;
    }
    public function setB($b){
        $this->b = $b;
    }

    public function getResult(){
        $result = 0;
        return $result;
    }
}
