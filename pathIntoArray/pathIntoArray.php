<?php

function parse_paths_of_files($path)
{
	$result = array();

	foreach ($path as $value)
	{
		$parts = explode('/', $value);
		$current = &$result;
		for ($i = 1, $max = count($parts); $i < $max; $i++)
		{
			if (!isset($current[$parts[$i-1]]))
			{
				$current[$parts[$i-1]] = array();
			}
			$current = &$current[$parts[$i-1]];
		}
		$current[] = $parts[$i];
	}

	return $result;
}

// $p = "C:/Users/Documents/Folder/Subfolder/";

// print_r(parse_paths_of_files(array($p)));
