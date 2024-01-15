<?php
	$file = file_get_contents('forum.txt');
	$array = preg_split("/\\r\\n|\\r|\\n/", $file);
	$storage = [];
	
	foreach($array as $k => $v) {
		$value = explode('|', $v);
		$storage[$k] = [
			'id' => $value[0],
			'title' => $value[8],
			'create_time' => $value[4],
			'author' => $value[10],
			'last_posted' => $value[12],
			'posts' => $value[6],
			'views' => $value[7]
		];
	}
	
	var_dump($storage);