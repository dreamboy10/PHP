<?php 
	session_start();
?>

<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>세션</title>
</head>
<body>
	<?php 
		$_SESSION['bridge'] = 100;
		$b = $_SESSION['bridge'];
		print "페이지 1의 값은 $b입니다. <br>\n";
	?>
	<a href="session2.php">
		페이지 2로
	</a>
</body>
</html>