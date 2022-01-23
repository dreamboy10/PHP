<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Autoload2</title>
</head>
<body>
	<?php
		require_once 'autoload.php';
		use \greeting\en\Hi as HiEn;
		use \greeting\ko\Hi as HiKo;
		new HiEn();
		new HiKo();
	?>
</body>
</html>