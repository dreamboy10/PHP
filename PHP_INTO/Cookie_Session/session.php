<?php 
	session_start();
	if(!isset($_SESSION['is_login'])){
  	header('Location: ./login.html');
	}
?>

<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Session3</title>
</head>
<body>
	<?php 
		echo $_SESSION['nickname'];
	?>
	님 환영합니다 <br>
  <a href="./logout.php">
  	로그아웃
  </a>
</body>
</html>