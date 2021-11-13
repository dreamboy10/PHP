<?php 
	// 쿠키 정보를 저장합니다.
	$counter = $_COOKIE['visittimes'];
	// 만일 변수 $counter가 있으면 값에 1을 늘리고 없으면 1을 대입합니다.
	if(isset($counter)) { // isset() 함수에서 변수가 있는지 조사합니다.
		$counter++;
	} else {
		$counter = 1;
	}
	// 만일 변수 $counter의 값이 3보다 크면 쿠키를 삭제합니다.
	if($counter > 3) {
		setcookie('visittimes', $counter, time() - 60);
	} else {
		setcookie('visittimes', $counter);
	}
?>

<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>방문 횟수 카운터</title>
</head>
<body>
	<?php 
		if($counter == 1) {
			// 처음으로 엑세스
			print "처음 뵙겠습니다! <br>\n";
		} else if($counter == 2) {
			// 2회째에 엑세스했을 때는 클라이언트의 IP 어드레스를 표시합니다.
			print $counter . "회째 방문이군요. <br>\n";
			print "당신의 IP 어드레스는 \"" .$_SERVER['REMOTE_ADDR']. "\n 입니다. <br>\n";
		} else if ($counter == 3) {
			// 3회째에 엑세스했을 때는 브라우저의 종류를 표시합니다.
			print $counter . "회째 방문이군요. <br>\n";
			print "당신의 브라우저는 \"" .$_SERVER['HTTP_USER_AGENT']. "\n 입니다. <br>\n";
		} else {
			// 4회째에 엑세스했을 때
			print $counter . "회째 방문이군요. <br>\n";
			print $counter . "차회 방문 시에는 방문횟수가 리셋됩니다. <br>\n";
		}
	?>
</body>
</html>