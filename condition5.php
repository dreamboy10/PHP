<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>제어문</title>
</head>
<body>
	<?php 
		// for($i = 1; $i < 4; $i++) {
		// 	print "안녕하세요" . $i . "<br>\n";
		// }
		for($j = 1; $j <= 9; $j++) {
			for($i = 1; $i <= 9; $i++) {
				print "$j X $i = " . ($j * $i) . "<br>\n";
			}
		}
	?>
</body>
</html>