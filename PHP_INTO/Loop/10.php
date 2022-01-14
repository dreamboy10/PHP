<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Loop10</title>
</head>
<body>
	<?php
		for($i = 0; $i < 10; $i++) {
    	if($i === 5) {
        break;
    	}
    	echo "coding everybody{$i}<br>";
		}
	?>
</body>
</html>