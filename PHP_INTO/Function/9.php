<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Function9</title>
</head>
<body>
	<?php
		$test = 1;
		function get_arguments() {
			global $test;
			$test = 2;
		}
		get_arguments();
		echo $test;
	?>
</body>
</html>