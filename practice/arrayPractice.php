<?php
echo 'Введите последовательность натуральных чисел, разделённых пробелом или запятой:'.PHP_EOL;
$userInput = trim(fgets(STDIN));

function arrayPractice($userInput) {
	$arr = array_diff((preg_split('/[\s,]+/',$userInput)), array('stop'));
	echo count(array_keys($arr, max($arr))).PHP_EOL;
};

arrayPractice($userInput);

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
