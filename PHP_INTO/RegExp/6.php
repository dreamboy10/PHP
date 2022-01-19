<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>RegExp6</title>
</head>
<body>
	<?php
		$string = 'April 15, 2003';
		$pattern = '/(\w+) (\d+), (\d+)/i';
		$replacement = '${1}1,$3';
		echo preg_replace($pattern, $replacement, $string);
	?>
</body>
</html>