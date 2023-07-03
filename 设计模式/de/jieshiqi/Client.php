<?php


include_once "./Context.php";
include_once "./NonTerminalExpression.php";
include_once "./TerminalExpression.php";
class Client{

    public function index(){
        $context = new Context();
        $syntax = [];
        $context->setInput("nihenhuai");
        array_push($syntax,new TerminalExpression());
        array_push($syntax, new NonTerminalExpression());
        array_push($syntax, new TerminalExpression());
        array_push($syntax, new TerminalExpression());

        foreach($syntax as $value){

            $value->interpret($context);
        }
    }
}

$cli = new Client();

$cli->index();