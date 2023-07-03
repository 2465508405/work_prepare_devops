<?php


include_once "./Ifactory.php";



AddFactory implements Ifactory {


	public function createOperator() {

		return new AddOperator();
	}
}