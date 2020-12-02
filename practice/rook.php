<?php

class ChessPiece {
	 protected $name;
	 protected $moveToDestination = false;
	 protected $arr = array();

	 function getName() {
	 	return $this->name;
	 }

	 function __get($name) {
		 echo 'Chess piece '. $name .PHP_EOL;
		 return $this->name;
	 }

	function inputToArray($string)
	{
		echo 'Введите координаты шахматных клеток: '.PHP_EOL;
		$arr = preg_split('/[\s,]+/', $string);
	}
}

class Rook extends ChessPiece {

	function checker($arr)
	{
		if (($arr[0] == $arr[2]) || ($arr[1] == $arr[3]))
		{
			$moveToDestination = true;
		}
		else
		{
			$moveToDestination = false;
		}
	}
}

