<?php


abstract class Mediator {

    abstract public function send($message ,Colleague $colleague);
}