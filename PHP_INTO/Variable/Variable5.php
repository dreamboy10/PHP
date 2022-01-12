<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Variable5</title>
</head>
<body>
	<?php 
		$a = 100;
		echo gettype($a);
		settype($a, 'double');
		echo "<br>";
		echo gettype($a);
	?>
</body>
</html>