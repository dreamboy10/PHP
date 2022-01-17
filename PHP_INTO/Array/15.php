<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Array15</title>
</head>
<body>
	<?php
		$li = ['a', 'b', 'c', 'd', 'e', 'z'];
		array_splice($li, 2, 0, 'B');
		var_dump($li);
	?>
</body>
</html>