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
		$b = $_SESSION['bridge'];
		print "페이지 2의 값은 $b입니다. <br>\n";
	?>
	<a href="session1.php">
		페이지 1로
	</a>
</body>
</html>