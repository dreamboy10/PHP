<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>제어문</title>
</head>
<body>
	<?php 
		$num = 1000;
		print "$num은";

		if(0 <= $num && $num <= 9) {
			print "한 자리수의 수입니다. <br>\n";
		} else if(10 <= $num && $num <= 99) {
			print "두 자리수의 수입니다. <br>\n";
		} else if(100 <= $num && $num <= 999) {
			print "세 자리수의 수입니다. <br>\n";
		} else {
			print "네 자리수 이상입니다. <br>\n";
		}
	?>
</body>
</html>