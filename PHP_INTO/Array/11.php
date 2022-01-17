<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Array11</title>
</head>
<body>
	<?php
		$li = ['a', 'b', 'c', 'd', 'e'];
		$li = array_merge($li, ['f','g']);
		var_dump($li);
	?>
</body>
</html>