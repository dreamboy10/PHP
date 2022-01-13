<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Condition12</title>
</head>
<body>
	<?php 
		if (true and true) {
    	echo 1;
		}
		if (true and false) {
    	echo 2;
		}
		if (false and true) {
    	echo 3;
		}
		if (false and false) {
    	echo 4;
		}
	?>
</body>
</html>