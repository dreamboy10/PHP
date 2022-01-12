<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Compare2</title>
</head>
<body>
	<?php 
		echo "1 != 2 : ";
		var_dump(1 != 2);
		echo "<br>";
		echo "1 != 1 : ";
		var_dump(1 != 1);
		echo "<br>";
		echo '"one" != "two" : ';
		var_dump("one" != "two");
		echo "<br>";
		echo '"one" != "one" : ';
		var_dump("one" != "one");
		echo "<br>";
	?>
</body>
</html>