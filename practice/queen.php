<?php


class Queen {
	private $inp;

	function __construct($inp) {
		$this->inp = $inp;
	}

	function inputToArray($inp)
	{
		if ($inp == null) {
			echo 'Введите координаты шахматных клеток: '.PHP_EOL;
			$arr = preg_split('/[\s,]+/', trim(fgets(STDIN)));
		}
		$arr = preg_split('/[\s,]+/', trim(fgets(STDIN)));
	}

	function checker($arr) {
		if (($arr[0] == $arr[2]) || ($arr[1] == $arr[3]) || (abs($arr[0]-$arr[2] == abs($arr[1]=$arr[3])))) {
			$message = 'ДА';
		}
		elseif (($arr[0] == $arr[2]) && ($arr[1] == $arr[3])) {
			$message = 'НЕ ХОД!';
		}
		else {
			$message = 'НЕТ';
		}
		return $message;
	}
}

$Queen1 = new Queen('1 1 2 2');
echo 'Hello'. $Queen1;