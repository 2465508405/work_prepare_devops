<?php


include_once "./AbstractExpression.php";
class NonTerminalExpression implements AbstractExpression{

    public function interpret(Context $context)
    {
        // TODO: Implement interpret() method.
        echo $context->getInput();
        echo "非终端解释器\n";
    }
}