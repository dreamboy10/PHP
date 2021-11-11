<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>함수</title>
</head>
<body>
	<?php 
		function getmenu($a = 'Drink', $b) {
			print $a;
			print $b;
		}
		getmenu('Tea');
		getmenu();
	?>
</body>
</html>