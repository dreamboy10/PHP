<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pdo</title>
</head>
<body>
	<form action="./process.php?mode=insert" 
		method="POST">
  	<p>
  		제목 : 
  		<input type="text" name="title"></p>
    <p>
    	본문 : 
    	<textarea name="description" id="" cols="30" 
    		rows="10"></textarea>
    </p>
    <p>
    	<input type="submit">
    </p>            
	</form>
</body>
</html>