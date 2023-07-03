<?php

include_once("./Command.php");

class BakeChichenWingCommand extends Command{


    public function excuteCommand()
    {
        // TODO: Implement excuteCommand() method.
        $this->receiver->bakeChichenWing();
    }
}