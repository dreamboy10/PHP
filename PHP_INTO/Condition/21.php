<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Condition16</title>
</head>
<body>
	<?php 
		if(
    ($_POST['id'] === 'dreamboy' or $_POST['id'] === 'juli' or $_POST['id'] === 'dopl')
    and
    $_POST['password'] === '111111'
		){
    	echo 'right';
		} else {
    	echo 'wrong';
		}
	?>
</body>
</html>