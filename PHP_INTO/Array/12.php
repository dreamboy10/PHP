<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Array12</title>
</head>
<body>
	<?php
		$li = ['a', 'b', 'c', 'd', 'e'];
		array_unshift($li,'z');
		var_dump($li);
	?>
</body>
</html>