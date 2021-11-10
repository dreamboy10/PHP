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

		$a[3] = $a[2];
		$a[2] = C;

		array_push($a, E, F);

		for($i = 0; $i < 6; $i++) {
			print $a[$i];
			print "<br>";
		}
	?>
</body>
</html>