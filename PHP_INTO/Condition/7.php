<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Condition7</title>
</head>
<body>
	<?php 
		if (false) {
			echo 1;
		} else if (true) {
			echo 2;
		} else if (true) {
			echo 3;
		} else {
			echo 4;
		}
	?>
</body>
</html>