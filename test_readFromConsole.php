<?php

require_once('./readFromConsole.php');


/*
 *readFromConsole('', 'true') - true;
 *readFromConsole('', 'false') - false;
 *readFromConsole('', '!stop') - null;
 *readFromConsole('', '1.3') - 1.3;
 *readFromConsole('', '1') - 1;
 *readFromConsole('', 'test') = 'test;
 */

function test_readFromConsole() {
	$result = readFromConsole(true);
	echo 'Результат: '. $result . ($result === true ? 'тест пройден':'тест не пройден').PHP_EOL;

	$result = readFromConsole(false);
	echo 'Результат: '. $result . ($result === false ? 'тест пройден':'тест не пройден').PHP_EOL;

	$result = readFromConsole('!stop');
	echo 'Результат: '. $result . ($result === null ? 'тест пройден':'тест не пройден').PHP_EOL;

	$result = readFromConsole(1.3);
	echo 'Результат: '. $result . ($result === 1.3 ? 'тест пройден':'тест не пройден').PHP_EOL;

	$result = readFromConsole(1);
	echo 'Результат: '. $result . ($result === 1 ? 'тест пройден':'тест не пройден').PHP_EOL;

	$result = readFromConsole('test');
	echo 'Результат: '. $result . ($result === 'test' ? 'тест пройден':'тест не пройден').PHP_EOL;
}

echo test_readFromConsole();