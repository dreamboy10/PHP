<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>함수</title>
</head>
<body>
	<?php 
		function funcnum($a) {
			print "인수값은 $a <br>\n";
		}
		$a = 10;
		funcnum(5);
		funcnum($a);

		function addnum($a, $b) {
			$c = $a + $b;
			return $c;
		}

		$x = 2;
		$y = 3;
		$z = addnum($x, $y);

		print "$x + $y = $z";
	?>
</body>
</html>