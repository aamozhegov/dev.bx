<?php

function parse_paths_of_files($path)
{
	if ($currentDir = opendir($path))
	{
		$list = [
			'dirs' => [],
			'files' => []
		];
		while (false !== ($element = readdir($currentDir))) {
			if (in_array($element, ['.', '..']))
			{
				continue;
			}
			if (is_dir($path.$element)) {
				$list['dirs'][$element]['is_readable'] =
					(is_readable($input.$element) == true ? 'true' : 'false');
				$list['dirs'][$element]['is_writable'] =
					(is_writable($input.$element) == true ? 'true' : 'false');
				$list['files'][$element]['filesize'] = filesize($path.$element);
			}
		}
		closedir($currentDir);
		return $list;
	}
	else {
		echo 'В директории не содержится папок или ввдн неверный путь';
	}

}



// $p = "C:/Users/Documents/Folder/Subfolder/";

// print_r(parse_paths_of_files(array($p)));
