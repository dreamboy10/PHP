<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>12별자리 조사</title>
</head>
<body>
	<!-- 생일 입력 서식 -->
	<form action="seiza.php" method="POST">
		별자리를 조사합니다. <br> 숫자로 생일을 입력하시오. <br>
		<input type="text" name="month"> 월
		<input type="text" name="day"> 일
		<input type="submit" value="조사한다">
		<input type="reset" value="다시입력"> <br>
	</form>
	<?php 
		// 생일로 별자리를 조사한다.
		// 인수 : 생일 ($a=월, $b=일)
		// 리턴값 : 별자리
		function seiza($a, $b) {
			if((($a == 3) && (21 <= $b && $b <= 31)) ||
				(($a == 4) && (1 <= $b && $b <= 20))){
					return "양자리";
			} else if((($a == 4) && (21 <= $b && $b <= 30)) ||
				(($a == 5) && (1 <= $b && $b <= 21))){
					return "황소자리";
			} else if((($a == 5) && (22 <= $b && $b <= 30)) ||
				(($a == 6) && (1 <= $b && $b <= 21))){
					return "쌍둥이자리";
			} else if((($a == 6) && (22 <= $b && $b <= 30)) ||
				(($a == 7) && (1 <= $b && $b <= 22))){
					return "게자리";
			} else if((($a == 7) && (23 <= $b && $b <= 31)) ||
				(($a == 8) && (1 <= $b && $b <= 22))){
					return "사자자리";
			} else if((($a == 8) && (23 <= $b && $b <= 31)) ||
				(($a == 9) && (1 <= $b && $b <= 23))){
					return "처녀자리";
			} else if((($a == 9) && (24 <= $b && $b <= 30)) ||
				(($a == 10) && (1 <= $b && $b <= 23))){
					return "천평자리";
			} else if((($a == 10) && (24 <= $b && $b <= 31)) ||
				(($a == 11) && (1 <= $b && $b <= 22))){
					return "전갈자리";
			} else if((($a == 11) && (23 <= $b && $b <= 30)) ||
				(($a == 12) && (1 <= $b && $b <= 21))){
					return "사수자리";
			} else if((($a == 12) && (22 <= $b && $b <= 31)) ||
				(($a == 1) && (1 <= $b && $b <= 19))){
					return "염소자리";
			} else if((($a == 1) && (20 <= $b && $b <= 31)) ||
				(($a == 2) && (1 <= $b && $b <= 18))){
					return "물병자리";
			} else if((($a == 2) && (19 <= $b && $b <= 29)) ||
				(($a == 3) && (1 <= $b && $b <= 20))){
					return "물고기자리";
			} else {
				// 해당하는 별자리가 없을 때
				return "불분명";
			}
		}

		// 입력 서식에서 데이터 받기
		$m = $_POST['month'];
		$d = $_POST['day'];

		// 데이터를 받았을 때
		if($m && $d) {
			$s = seiza($m, $d);
			print "$m 월 $d 일생은 $s입니다.";
		}
	?>
</body>
</html>