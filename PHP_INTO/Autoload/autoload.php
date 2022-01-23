<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Autoload5</title>
</head>
<body>
	<?php
		spl_autoload_register(function ($path) {
			$path = $path.'.php';
			print("path: {$path}");
			require_once 'greeting.php';
		});
	?>
</body>
</html>