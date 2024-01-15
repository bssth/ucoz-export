<?php
	$file = file_get_contents('forump.txt');
	$array = preg_split("/\\r\\n|\\r|\\n/", $file);
	$storage = [];
	
	foreach($array as $k => $v) {
		$value = explode('|', $v);
		$storage[$k] = [
			'id' => $value[0],
			'topic' => $value[1],
			'date' => $value[2],
			'html' => $value[4],
			'author' => $value[6],
			'edited' => $value[16],
			'ip' => $value[12]
		];
	}
	
	var_dump($storage);