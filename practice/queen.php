<?php


class Queen {

	function inputToArray()
	{
		echo 'Введите координаты шахматных клеток: '.PHP_EOL;
		$arr = preg_split('/[\s,]+/', trim(fgets(STDIN)));
	}

	function checker($arr) {
		if (($arr[0] == $arr[2]) || ($arr[1] == $arr[3]) || (abs($arr[0]-$arr[2] == abs($arr[1]=$arr[3])))) {
			$message = 'ДА';
		}
		else {
			$message = 'НЕТ';
		}
		return $message;
	}
}