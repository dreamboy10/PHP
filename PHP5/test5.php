<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>함수</title>
</head>
<body>
	<?php 
		$x = $y = 10;
		function funcscope() {
			$x = 20;
			global $y;
			static $z = 0;

			$x++; $y++; $z++;
			print "\$x = $x, \$y = $y, \$z = $z";
			print "<br>";
			return $z;
		}
		$k = funcscope();
		$k = funcscope();
		print "\$x = $x, \$y = $y, \$k = $k";
	?>
</body>
</html>