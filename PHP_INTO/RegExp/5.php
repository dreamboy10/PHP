<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>RegExp5</title>
</head>
<body>
	<?php
		$str = 'foobar: 2008';
 
		preg_match('/(?P<name>\w+): (?P<digit>\d+)/', $str, $matches);
 
		print_r($matches);
	?>
</body>
</html>