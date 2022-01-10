<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>제어문</title>
</head>
<body>
	<?php 
		$s = $i = 0;

		do {
			++$i;
			$s += $i;
		} while($i < 10);

		print "1부터 $i까지의 합은 $s";
	?>
</body>
</html>