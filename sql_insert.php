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
			$query = "INSERT INTO tbl_ehon(id, title, price)
			VALUES (1, 'C가 보이는 그림책', 1380)";
			$result = sqlite_query($db, $query);
			$query = "INSERT INTO tbl_ehon(id, title, price)
			VALUES (2, 'TCP/IP가 보이는 그림책', 1580)";
			$result = sqlite_query($db, $query);
			$query = "INSERT INTO tbl_ehon(id, title, price)
			VALUES (3, 'SQL이 보이는 그림책', 1680)";
			$result = sqlite_query($db, $query);
			$query = "INSERT INTO tbl_ehon(id, title, price)
			VALUES (4, 'Perl가 보이는 그림책', 1780)";
			$result = sqlite_query($db, $query);
			print "db_ehon에 데이터를 등록했습니다.";
		} else {
			die("데이터를 등록할 수 없습니다.");
		}
		sqlite_close($db);
	?>
</body>
</html>