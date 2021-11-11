<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>상수</title>
</head>
<body>
	<?php 
		$a = define("DEF_COLOR", "Blue");
		print $a;
		$b = define("DEF_GREET", "Hello");
		print $b;
		$c = define("DEF_GREET", "Good bye");
		print $c;
	?>
</body>
</html>