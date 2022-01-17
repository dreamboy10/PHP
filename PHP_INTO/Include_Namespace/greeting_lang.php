<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Namespace3</title>
</head>
<body>
	<?php
		namespace language\en;
		function welcome(){
    	return 'Hello world';
		}
		
		namespace language\ko;
		function welcome(){
    	return '안녕세계';
		}
	?>
</body>
</html>