<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>File12</title>
</head>
<body>
	<?php 
		ini_set("display_errors", "1");
		$uploaddir = 'C:\Bitnami\wampstack-8.1.1-0\apache2\htdocs\File\\';
		$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
		echo '<pre>';
		if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    	echo "파일이 유효하고, 성공적으로 업로드 되었습니다.\n";
		} else {
    	print "파일 업로드 공격의 가능성이 있습니다!\n";
		}
		echo '자세한 디버깅 정보입니다:';
		print_r($_FILES);
		print "</pre>";
	?>
	<img src="./<?=$_FILES['userfile']['name']?>"/>
</body>
</html>