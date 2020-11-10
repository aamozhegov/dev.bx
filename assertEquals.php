<?php

require_once('./readFromConsole.php');

function assertEquals($expected, $received, $message = '') {

	$result = readFromConsole(true, true);
	echo 'Тест '. ($result === $expected ? 'пройден' : 'не пройден').PHP_EOL;

	$result = readFromConsole(false, false);
	echo 'Тест '. ($result === $expected ? 'пройден' : 'не пройден').PHP_EOL;

	$result = readFromConsole(null);
	echo 'Тест '. ($result === $expected ? 'пройден' : 'не пройден').PHP_EOL;

	$result = readFromConsole(1.3);
	echo 'Тест '. ($result === 1.3 ? 'пройден' : 'не пройден').PHP_EOL;

	$result = readFromConsole(1);
	echo 'Тест '. ($result === 1 ? 'пройден' : 'не пройден').PHP_EOL;

	$result = readFromConsole('test');
	echo 'Тест '. ($result === 'test' ? 'пройден' : 'не пройден').PHP_EOL;
}

/*
$result = calculate(1, 2, '+');
assertEquals(3, $result, 'Test: 1 + 2 = 3 ');
*/