<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>파일 검사와 조작</title>
</head>
<body>
	<?php
		$fp = @fopen("file.txt", "w") or die ("Error!\n");
		fputs($fp, "원래의 파일명은 (file.txt)입니다. \n");
		fclose($fp);
		rename("file.txt", "newfile.txt");
		print "파일명을 변경했습니다. <br>\n";

		if(file_exists("newfile.txt")) {
			$fp = @fopen("newfile.txt", "r") or die ("Error!\n");
			$line = fgets($fp);
			print $line . "<br>\n";
			fclose($fp);
			unlink("newfile.txt");
			print "(newfile.txt)를 삭제했습니다. <br>\n";
		} else {
			print "(newfile.txt)는 없습니다. <br>\n";
		}
	?>
</body>
</html>