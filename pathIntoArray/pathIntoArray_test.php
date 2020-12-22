<?php

require_once('./pathIntoArray.php');

function test() {
	$result = getDirectoryStatus();
	assertEquals("", "", "Пустой путь");
}


function assertEquals($expected, $current, $message) {
	echo $current === $expected ? "тест пройден" : "тест не пройден";
}
