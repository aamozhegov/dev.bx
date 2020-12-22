<?php

require_once('./Path_IntoArray_test.php');

function test() {
	$result = parse_paths_of_files();
	assertEquals("В директории нет содержимого или введён неверный путь", $result,"В директории нет содержимого или введён неверный путь");

	$result = parse_paths_of_files('абракадабра');
	assertEquals("В директории нет содержимого или введён неверный путь", $result, "В директории нет содержимого или введён неверный путь");
}

