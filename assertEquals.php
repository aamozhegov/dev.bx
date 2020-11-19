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
	function assertEquals($expected, $received, $message='')
	{
		echo $message . ($received === $expected ? "Тест пройден" : "Тест не пройден").PHP_EOL;
	}

	/*
	$result = calculate(1, 2, '+');
	assertEquals(3, $result, 'Test: 1 + 2 = 3 ');
	*/
	test_readFromConsole();
	echo test_readFromConsole();