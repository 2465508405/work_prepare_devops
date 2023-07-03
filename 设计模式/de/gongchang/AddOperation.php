<?php

include_once("./Operation.php");
class AddOperation extends Operation{

    public function getResult()
    {

        return $this->a + $this->b;
    }
}