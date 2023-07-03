<?php

include_once("./Command.php");
class BakeMuttonCommand extends Command {


    public function excuteCommand()
    {
        // TODO: Implement excuteCommand() method.

        $this->receiver->bakeMutton();
    }
}