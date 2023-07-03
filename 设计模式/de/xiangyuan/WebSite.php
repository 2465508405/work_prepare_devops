<?php

include_once "./User.php";
abstract class WebSite{

    abstract public function using(User $user);
}