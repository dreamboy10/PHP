<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Static1</title>
</head>
<body>
	<?php
		class Person {
			private static $count = 0;
			private $name;
			function __construct($name) {
				$this->name = $name;
				self::$count = self::$count + 1;
			}
			function enter() {
				echo "<h1>Enter ".$this->name.
					" ".self::$count."th</h1>";
			}
			static function getCount() {
				return self::$count;
			}
		}
		$p1 = new Person('dreamboy');
		$p1->enter();
		$p2 = new Person('ddre');
		$p2->enter();
		$p3 = new Person('huilf');
		$p3->enter();
		$p4 = new Person('yule');
		$p4->enter();
		echo Person::getCount();
	?>
</body>
</html>