<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>데이터베이스 접속</title>
</head>
<body>
	<?php
		$host = "localhost";
		$user = "root";
		$pw = "414141";
		$dbName = "dreamboy";

		$conn = new mysqli($host, $user, $pw, $dbName);

		if($conn) {
			echo "Connection established"."<br>";
		} else {
			die ('Could not connect: ' . mysqli_error($conn));
		}
		mysqli_close($conn);
	?>
</body>
</html>