<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Function7</title>
</head>
<body>
	<?php
		function get_arguments($arg1, $arg2) {
    	return $arg1 + $arg2;
		}
		echo get_arguments(10, 20);
		echo get_arguments(20, 30);
	?>
</body>
</html>