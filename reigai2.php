<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>예외</title>
</head>
<body>
	<?php 
		function divnum($a, $b) {
			try {
				if($b == 0 || !is_numeric($a) || !is_numeric($b)) {
					// b가 0일 때 또는 $a와 $b 중의 어느 것이 숫자가 아닐 때
					throw new Exception("계산할 수 없습니다.");
				} else {
					$c = $a / $b;
				}
			} catch (Exception $e) {
					$c = $e->getMessage();
			}
			return $c;
		}
		$x = ($_POST['left']);
		$y = ($_POST['right']);
		$z = divnum($x, $y);
		print "$x / $y = $z <br>\n";
	?>
	<a href="reigai1.html">
		앞 페이지로 돌아갑니다.
	</a>
</body>
</html>