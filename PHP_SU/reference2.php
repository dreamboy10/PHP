<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>레퍼런스</title>
</head>
<body>
	<?php 
		$a = 1;
		$b = $a;
		$a = 3;
		print "\$a의 값은 $a, \$b의 값은 $b<br>\n";

		$b = &$a;
		$a = 5;
		print "\$a의 값은 $a, \$b의 값은 $b<br>\n";

		$b = 100;
		print "\$a의 값은 $a, \$b의 값은 $b\n";
	?>
</body>
</html>