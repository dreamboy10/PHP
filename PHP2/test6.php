<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>배열</title>
</head>
<body>
	<?php 
		$a = array(A, B, D);
		$b = array(D, B, C);

		$c = array_diff($a, $b);
		print $c[0];
	?>
</body>
</html>