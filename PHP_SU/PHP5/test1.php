<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>함수에 대한 정의와 호출</title>
</head>
<body>
	<?php 
		$d = addnum(10, 20);

		function addnum($a, $b) {
			$c = $a + $b;
			return $c;
		}

		$e = addnum(100, 200);
		print "\$d = $d <br> \$e = $e";
	?>
</body>
</html>