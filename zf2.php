<?php

$command = $argv[1];

function copyTemplate($directory, $module){
	$moduleLower = strtolower($module);
	$currentDirectory = dir($directory);
	
	while ($entry = $currentDirectory->read()) {
		if ($entry != "." && $entry != "..") {
			$newEntry = str_replace("template", $moduleLower, $directory . '/' . $entry);
			$newEntry = str_replace("Template", $module, $newEntry);
			
			if (is_dir($directory."/".$entry)) {
				system("mkdir {$newEntry} -p");
				
				copyTemplate($directory."/".$entry, $module);
			}
			else {
				$template = file_get_contents($directory . "/" . $entry);
				$template = str_replace('{$module}', $module, $template);
				$template = str_replace('{$moduleLower}', $moduleLower, $template);
				file_put_contents($newEntry, $template);
			}
		}
	}
	
	$currentDirectory->close();
}

switch ($command) {
	case "create":
		$type = $argv[2];
		
		switch ($type) {

			case "module":

				$module = $argv[3];

				copyTemplate(__DIR__ . '/module/Template', $module);

				if ( isset($argv[4]) && $argv[4] == 'with_tests' ) {

					copyTemplate(__DIR__ . '/tests/module/Template', $module);

				}
		}
		break;
}
