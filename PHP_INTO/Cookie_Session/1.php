<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cookie1</title>
</head>
<body>
	<?php 
		setCookie('cookie1', '생활코딩');
    setCookie('cookie2', time(), time()+60);
	?>
</body>
</html>