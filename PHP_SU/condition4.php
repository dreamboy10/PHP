<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>제어문</title>
</head>
<body>
	<?php 
		$a = 90;

		if($a > 80){
			if($a == 100) {
				print "만점입니다. <br>\n";
			} else {
				print  "조금 더 노력하세요. <br>\n";
			}
		} else {
			print "힘내세요. <br>\n";
		}
	?>
</body>
</html>