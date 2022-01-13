<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Condition14</title>
</head>
<body>
	<?php 
		if (true or true) {
    	echo 1;
		}
		if (true or false) {
    	echo 2;
		}
		if (false or true) {
    	echo 3;
		}
		if (false or false) {
    	echo 4;
		}
	?>
</body>
</html>