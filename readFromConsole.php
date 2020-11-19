<?php

function readFromConsole($message='Введите что-нибудь', $user_input=null)
{
	if ($user_input === null) {
		echo $message.PHP_EOL;
		$user_input = trim(fgets(STDIN));
	}

	if ($user_input === 'true') {
		$result = (bool)$user_input;
	}
	elseif (is_string($user_input)) {
		$result = (string)$user_input;
	}
	elseif (is_float($user_input)) {
		$result = (float)$user_input;
	}
	elseif (is_int($user_input)) {
		$result = (int)$user_input;
	}
	echo $result;
	return $result;
}

readFromConsole();




