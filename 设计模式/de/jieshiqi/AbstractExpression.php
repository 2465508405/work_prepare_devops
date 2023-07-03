<?php


interface AbstractExpression{

    public function interpret(Context $context);
}