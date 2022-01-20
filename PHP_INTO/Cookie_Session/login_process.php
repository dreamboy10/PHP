<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Session3</title>
</head>
<body>
	<?php 
		session_start();
		$id = 'dreamboy';
		$pwd = '515151';
		if(!empty($_POST['id']) && !empty($_POST['pwd'])){
    	if($_POST['id'] == $id && $_POST['pwd'] == $pwd){
      	$_SESSION['is_login'] = true;
      	$_SESSION['nickname'] = '드림보이';
      	header('Location: ./session.php');
      	exit;
    	}
		}
		echo '로그인 하지 못했습니다.';
	?>
</body>
</html>