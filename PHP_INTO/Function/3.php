<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Function3</title>
</head>
<body>
	<?php
		function numbering () {
    	$i = 0;
    	
    	while($i < 10) {
        echo $i;
        $i += 1;
    	}
		}
		numbering();
		numbering();
		numbering();
		numbering();
		numbering();
	?>
</body>
</html>