<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Condition11</title>
</head>
<body>
	<?php 
		if($_POST['id'] === 'dreamboy') {
    	if($_POST['password'] === '111111') {
      	echo 'right';
    	} else {
        echo 'password wrong';
    	}   
		} else {
    	echo 'id wrong';
		}
	?>
</body>
</html>