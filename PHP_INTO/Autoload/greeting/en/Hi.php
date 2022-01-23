<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Autoload3</title>
</head>
<body>
	<?php
		namespace greeting\en;
		class Hi {
			function __construct() {
				echo '<h1>Hi</h1>';
			}
		}
	?>
</body>
</html>