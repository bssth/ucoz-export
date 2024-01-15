<?php
	$file = file_get_contents('users.txt');
	$array = preg_split("/\\r\\n|\\r|\\n/", $file);
	$storage = [];
	
	foreach($array as $k => $v) {
		$value = explode('|', $v);
		$storage[$k] = [
			'login' => $value[0],
			'avatar' => $value[1],
			'username' => $value[5],
			'email' => $value[7],
			'homepage' => $value[8],
			'reg_date' => $value[15],
			'ip' => $value[16],
			'born' => array_reverse(explode('-', $value[22])),
			'login_date' => $value[27],
			'import_site' => $value[17]
		];
	}
	
	var_dump($storage);