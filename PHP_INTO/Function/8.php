<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Function8</title>
</head>
<body>
	<?php
		function get_arguments($arg1 = 100) {
    	return $arg1;
		}
		echo get_arguments(1);
		echo ',';
		echo get_arguments();
	?>
</body>
</html>