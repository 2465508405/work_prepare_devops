<?php

abstract class Component {


    protected $name;

    function __construct($name)
    {
        $this->name = $name;
    }

    abstract public function add(Component $c);
    abstract public function remove(Component $c);
    abstract public function display($depth);
}