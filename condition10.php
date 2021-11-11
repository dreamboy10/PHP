<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>제어문</title>
</head>
<body>
	<?php 
		// switch($i) {
		// 	case 1:
		// 		print "1";
		// 	case 2:
		// 		print "2";
		// 	case 3:
		// 		print "3";
		// }

		$kuji = mt_rand(1, 6);
		switch($kuji) {
			case 1:
				print "점괘가 아주 좋습니다.";
				break;
			case 2:
				print "점괘가 좋습니다.";
				break;
			case 3:
				print "점괘가 약간 좋습니다.";
				break;
			case 4:
				print "점괘가 양호합니다.";
				break;
			case 5:
				print "점괘의 운이 다했습니다.";
				break;
			case 6:
				print "점괘가 좋지 않습니다.";
				break;
		}
	?>
</body>
</html>