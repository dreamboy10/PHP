<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>예제 프로그램 - 거스름돈을 계산한다(자동판매기)</title>
</head>
<body>
	<?php 
		$m = $_POST['money'];
		$r = $m - 120;
		$kouka = array(500,100,50,10,0);

		if($r < 0) {
			print "돈이 부족합니다. <br>\n";
		} else if($m > 1000) {
			print "1000원 이내의 돈을 넣으시오. <br>\n";
		} else if($r == 0) {
			print "죄송합니다. 거스름돈이 없습니다. <br>\n";
		} else {
			print "감사합니다. 거스름돈은 $r원입니다. <br><br>\n";
			print "동전의 개수는 다음과 같습니다. <br>\n";
			$n = 0;
			while($kouka[$n] > 0) {
				print $kouka[$n] . "원짜리 동전" . (int)($r / $kouka[$n] ) . "개 <br>\n";
				$r = $r % $kouka[$n];
				$n++;
			}
		}
	?>
	<br>
	<a href="konyu.html">돈을 다시 넣는다.</a>
</body>
</html>