<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pdo</title>
</head>
<body>
	<?php
		$dbh = new PDO('mysql:host=localhost;dbname=opentutorials', 
			'root', '515151', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		switch($_GET['mode']){
    	case 'insert':
      	$stmt = $dbh->prepare("INSERT INTO topic (title, description, created) VALUES (:title, :description, now())");
      	$stmt->bindParam(':title',$title);
      	$stmt->bindParam(':description',$description);
 
        $title = $_POST['title'];
        $description = $_POST['description'];
        $stmt->execute();
        header("Location: list.php"); 
        break;
    	case 'delete':
        $stmt = $dbh->prepare('DELETE FROM topic WHERE id = :id');
        $stmt->bindParam(':id', $id);
 
        $id = $_POST['id'];
        $stmt->execute();
        header("Location: list.php"); 
        break;
    	case 'modify':
        $stmt = $dbh->prepare('UPDATE topic SET title = :title, description = :description WHERE id = :id');
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':id', $id);
 
        $title = $_POST['title'];
        $description = $_POST['description'];
        $id = $_POST['id'];
        $stmt->execute();
        header("Location: list.php?id={$_POST['id']}");
        break;
		}
	?>
</body>
</html>