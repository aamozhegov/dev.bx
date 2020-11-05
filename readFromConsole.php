<?php

function readFromConsole()
{
	$summa = null;
	$counter = 1;
	echo("Программа складывает числа пока не получен '0' или не нажат 'ENTER'\n");
	for (; ;)
	{
		echo('Введите число '.$counter.': ');
		$input = fgets(STDIN);
		$counter ++;
		if ($input == 0)
		{
			echo 'Сумма введенных чисел равна '.($summa);
			break;
		}
		$summa += $input;
	}
}

readFromConsole();
