<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>쿠키</title>
</head>
<body>
	<?php
		setcookie('val', 100, time()+180);
		setcookie('val', "", time()-60);
	?>
</body>
</html>