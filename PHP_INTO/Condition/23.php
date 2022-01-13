<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Condition18</title>
</head>
<body>
	<?php 
		if (1 and 1) {
    	echo 1;
		}
		if (1 and 0) {
    	echo 2;
		}
		if (0 and 1) {
    	echo 3;
		}
		if (0 and 0) {
    	echo 4;
		}
	?>
</body>
</html>