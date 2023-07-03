<?php


abstract class Player {


    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    abstract public function attack();
    abstract public function defense();
}