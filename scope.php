<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>함수</title>
</head>
<body>
	<?php 
		$x = 2; $y = 2;

		function funcscope() {
			$x = 0;
			global $y;
			static $z;
			$x++; $y++; $z++;
			print "\ $x=$x , \ $y=$y, \ $z=$z";
			print "<br>\n";
		}
		funcscope();
		funcscope();
		print "\ $x=$x, \ $y=$y";
	?>
</body>
</html>