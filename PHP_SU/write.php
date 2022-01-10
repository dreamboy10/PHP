<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>파일 쓰기</title>
</head>
<body>
	<form action="write.php" method="POST">
		<input type="text" name="mojiretsu">
		<input type="submit" value="보내기">
	</form>
	<?php
		$mojiretsu = $_POST['mojiretsu'];
		if($mojiretsu) {
			$fp = @fopen("write.txt", "w") or die ("Error!\n");
			fputs($fp, $mojiretsu);
			fclose($fp);
			print "파일 (write.txt)에 썼습니다.";
		}
	?>
</body>
</html>