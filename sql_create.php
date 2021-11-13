<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>테이블 작성</title>
</head>
<body>
	<?php
		if($db = sqlite_open("db_ehon")) {
			$query = "CREATE TABLE tbl_ehon (
				id INT, title VARCHAR(10), price INT)";
			$result = sqlite_query($db, $query);
			print "db_ehon을 작성했습니다.";
		} else {
			die("데이터베이스에 접속할 수 없습니다.");
		}
		sqlite_close($db);
	?>
</body>
</html>