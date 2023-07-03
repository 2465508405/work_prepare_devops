<?php

include_once "./Operation.php";

class SubOPeration extends Operation{



    public function getResult()
    {
        return $this->a - $this->b;
    }
}