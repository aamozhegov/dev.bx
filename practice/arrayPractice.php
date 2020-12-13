<?php

function arrayPractice($userInput) {
	if ($userInput == null) {
		echo 'Введите последовательность натуральных чисел, разделённых пробелом или запятой:'.PHP_EOL;
		$userInput = trim(fgets(STDIN));
	}
	$arr = array_diff((preg_split('/[\s,]+/',$userInput)), array('stop'));
	return(count(array_keys($arr, max($arr)))).PHP_EOL;
};

echo arrayPractice($userInput);

/*
$arr = array();
echo 'Введите натуральное число'.PHP_EOL;
echo 'Введите "stop" чтобы завершить'.PHP_EOL;

while (True) {
	$userInput = trim(fgets(STDIN));
	if (($userInput == 'stop') || (count($arr) == 20)){
		break;
	}
	else {
		array_push($arr, $userInput);
	}
}

echo count($arr);



Попытка реализации с do...while
do {
	$userInput = fgets(STDIN);
	if ((string)$userInput == 'stop') {
		break;
	}
	array_push($arr, $userInput);
} while (True);
*/
