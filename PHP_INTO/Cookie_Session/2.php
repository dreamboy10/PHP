<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cookie2</title>
</head>
<body>
	<?php 
		echo $_COOKIE['cookie1']."<br>";
		echo time()-$_COOKIE['cookie2'];
	?>
</body>
</html>