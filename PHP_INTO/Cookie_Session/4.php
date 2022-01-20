<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Session2</title>
</head>
<body>
	<?php 
		ini_set("display_errors", "1");
		session_save_path('./session');
		session_start();
		echo $_SESSION['title'];
		echo file_get_contents('./session/session/sess_'.session_id());
	?>
</body>
</html>