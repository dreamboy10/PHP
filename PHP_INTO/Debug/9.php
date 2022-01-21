<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Debug9</title>
</head>
<body>
	<?php 
		if(true) {
			error_log(1);
		} else {
			error_log(2);
		}
	?>
</body>
</html>