<?php
include_once "AddFactory.php";


class client  {



	public function __construct() {


		$fac = new AddFactory();

		$op = $fac->createOperator();
		$op->$a = 1;
		$op->$b = 2;
		$op->getResult();

	}
}