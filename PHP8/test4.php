<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>파일 존재 여부</title>
</head>
<body>
	<?php 
		if(file_exists("data1.txt") && file_exists("data2.txt")) {
			$fp1 = fopen("data1.txt", "r");
			$fp2 = fopen("data2.txt", "a");
		} else {
			print "파일이 존재하지 않습니다.";
			exit;
		}
		while(!feof($fp1)) {
			$line = fgets($fp1);
			print $line;

			fputs($fp2, $line);
		}
		fclose($fp1);
		fclose($fp2);
	?>
</body>
</html>