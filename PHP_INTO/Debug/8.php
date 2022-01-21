<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Debug8</title>
</head>
<body>
	<?php 
		$a = array(2, 4, 5);
		error_log(var_export($a, 1));
	?>
</body>
</html>