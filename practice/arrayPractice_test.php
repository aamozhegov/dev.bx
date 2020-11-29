<?php

require_once('./arrayPractice.php');

function arrayPractice_test() {
	$result = arrayPractice('1 2 3 4 5 6 7 8 9 18 11 18 13 18 15 16 17 18 18 18 stop');
	assertEquals(6, $result, 'arrayPractice("1 2 3 4 5 6 7 8 9 18 11 18 13 18 15 16 17 18 18 18 stop") - ');

	$result = arrayPractice('1, 2, 3, 4, 5, 6, 7, 8, 9, 18, 11, 18, 13, 18, 15, 16, 17, 18, 18, 18, stop');
	assertEquals(7, $result, 'arrayPractice("1 2 3 4 5 6 7 8 9 18 11 18 13 18 15 16 17 18 18 18 stop") - ');

	$result = arrayPractice('1');
	assertEquals(1, $result, 'arrayPractice("1 2 3 4 5 6 7 8 9 18 11 18 13 18 15 16 17 18 18 18 stop") - ');

}

function assertEquals($expected, $given, $message) {
	echo $message . ($given === $expected ? 'PASSED' : 'FAILED').PHP_EOL;
};

arrayPractice_test();