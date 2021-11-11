<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>제어문</title>
</head>
<body>
	<?php 
		for($i = 2; $i <= 9; $i++) {
			for($j = 1; $j <= 9; $j++) {
				$data = $i * $j;
				print "$i * $j = $data";
				print "<br>";
			}
		}
	?>
</body>
</html>