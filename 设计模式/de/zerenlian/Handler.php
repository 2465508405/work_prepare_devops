<?php

abstract class Handler {

    protected $successor;

    public function setSuccessor(Handler $successor){

        $this->successor = $successor;
    }

    abstract function handleRequest($request);
}