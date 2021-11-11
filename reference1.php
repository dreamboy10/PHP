<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>레퍼런스</title>
</head>
<body>
	<?php 
		// $b = 100;
		// $a = & $b;
		// print $a;
		// print $b;
		// $b = 100;
		// $a = & $b;
		// $b = 200;
		// print $a;
		$b = 100;
		$a = & $b;
		$a = 500;
		print $a;
	?>
</body>
</html>