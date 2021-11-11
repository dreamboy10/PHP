<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>제어문</title>
</head>
<body>
	<?php 
		$s = 65;
		print "당신의 점수는 $s점입니다. <br>\n";

		if($s < 70){
			print "평균까지는 앞으로" (70 - $s). "점 남았어요. <br>\n";
			print "힘내세요! <br>\n";
		} else {
			print "잘 했어요! <br>\n";
		}
	?>
</body>
</html>