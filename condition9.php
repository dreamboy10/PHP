<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>제어문</title>
</head>
<body>
	<?php 
		// $b = 2;

		// for($a = 0; $a < 5; $a++) {
		// 	if($b - $a == 0)
		// 		break;
		// 	print "$b - $a = " . ($b - $a) . "<br>\n";
		// }

		$b = 1;

		for($a = 0; $a < 4; $a++) {
			if($a + $b == 2)
				continue;
			print "$a + $b = " . ($a + $b) . "<br>\n";
		}
	?>
</body>
</html>