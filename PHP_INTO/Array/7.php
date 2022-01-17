<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Array7</title>
</head>
<body>
	<?php
		function get_members(){
    	return ['dreamboy', 'juliyr', 'bdiop'];
		}
 
		$tmp =  get_members();
		echo $tmp[1];
	?>
</body>
</html>