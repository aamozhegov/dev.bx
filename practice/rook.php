<?php
/*
li = [int(input()) for i in range(4)]
if li[0] == li[2] or li[1] == li[3]:
	print("YES")
else:
	print("NO")
*/

class Rook {

	function inputToArray()
	{
		echo 'Введите координаты шахматных клеток: '.PHP_EOL;
		$arr = preg_split('/[\s,]+/', trim(fgets(STDIN)));
	}

	function checker($arr) {
		if (($arr[0] == $arr[2]) || ($arr[1] == $arr[3])) {
			$message = 'ДА';
		}
		else {
			$message = 'НЕТ';
		}
		return $message;
	}
}

$rookOne = new Rook;

var_dump($rookOne);