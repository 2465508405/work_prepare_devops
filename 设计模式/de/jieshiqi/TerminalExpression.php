<?php

include_once "./AbstractExpression.php";
class TerminalExpression implements AbstractExpression{



    public function interpret(Context $context)
    {
        // TODO: Implement interpret() method.
        echo "终端解释器\n";
    }

}s