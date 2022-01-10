<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>파일 업로드</title>
</head>
<body>
	<?php 
		$str = $_FILES['upfile']['name'];
		if(move_uploaded_file($_FILES['upfile']['tmp_name'], $str) == FALSE) {
			print "파일 업로드 실패";
		} else {
			print ($_FILES['upfile']['name']);
			print "를 업로드했습니다.";
		}
	?>
</body>
</html>