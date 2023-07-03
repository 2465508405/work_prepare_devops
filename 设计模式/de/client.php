<?php

include_once('./gun.php');
include_once('./aka.php');
include_once("./buqiang.php");
class Client {

	public function __construct(Gun $gun){

			$this->gun = $gun;
	}


	public function shoot(){

			$this->gun->shoot();

	}
}

$client = new Client(new Buqiang());

$client->shoot();