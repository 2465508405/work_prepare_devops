<?php


abstract class Command {


    protected $receiver;

    function __construct(Barbecuer $barbecuer)
    {
        $this->receiver = $barbecuer;
    }

    abstract public function excuteCommand();
}