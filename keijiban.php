<?php 
	// 데이터 파일 읽기
	$data_file = "keijiban.txt";
	$ext = file_exists($data_file);
	$lines = $ext ? file($data_file) : array();

	// 쓰기 버튼이 클릭됐을 때
	if($_POST['submit']) {
		// 에러이면 메시지를 설정합니다.
		if(!$POST['name']) {
			$errMsg = '이름을 입력하시오. <br>';
		}
		else if(!$_POST['free']) {
			$errMsg .= '기사를 입력하시오.';
		}

		// 에러 메시지가 설정되지 않았다면 신규 데이터를 추가합니다.
		if(!$errMsg) {
			// 태그 등을 적용시키지 않는 함수
			function convert_str($str) {
				$str = htmlspecialchars($str);
				$str = ereg_replace("\n|\r|\r\n", "<br>", $str);
				return $str;
			}

			$ln = explode(",", $lines[0]);
			$no = $ext ? sprintf("%03d", $ln[0] + 1) : "001";
			$name = convert_str($_POST['name']);
			$free = convert_str($_POST['free']);
			$delkey = $_POST['delkey'] ? convert_str($_POST['delkey']) : '#####';

			$time = date("Y/m/d H:i:s");

			// 신규 데이터를 코머로 구분하는 텍스트로 하고 배열의 선두에 추가합니다.
			$data = "$no, $name, $free, $delkey, $time\n";
			array_unshift($lines, $data);
		}
	}
	// 삭제 버튼이 클릭되면 지정 NO와 삭제키가
	// 기존의 데이터와 각각 일치하는 것을 찾아 삭제합니다.
	if($_POST['delbtn'] && $ext) {
		for($i = 0; $i < count($lines); $i++) {
			$ln = explode(",", $lines[$i]);
			if($ln[0] == $_POST['no'] && $ln[3] == $_POST['Rdkey']) {
				array_splice($lines, $i, 1);
				break;
			}
		}
	}

	// 쓰기 또는 삭제의 어느 버튼이 클릭됐으면
	// 위에 열거한 파일을 파일에 씁니다.
	if($_POST['submit'] || $_POST['delbtn']) {
		$fk = fopen($data_file, 'w');
			foreach ($line as $line)
				fputs($fk, $line);
		fclose($fk);
	}
?>

<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>그림책의 게시판</title>
</head>
<body>
	<form action="keijiban.php" method="POST">
		<center>
			<h1>
				그림책의 게시판
			</h1>
			No : <input type="text" name="no" size="5">
			삭제키 : <input type="text" name="Rdkey" size="27">
			<input type="submit" name="delbtn" value="삭제"> <br>
			<?php
				// 에러 메시지가 설정됐을 때 표시합니다.
				if($errMsg)
					echo "<font color='red'>" .$errMsg. "</font>";
			?>
			<table border="1" align="center">
				<tr>
					<td>
						이름 : <input type="text" name="name" size="27">
						삭제키 : <input type="text" name="delkey" size="27"> <br>
						기사 <br>
						<textarea name="free" cols="60" rows="8"></textarea> <br> <br>
						<center>
							<input type="submit" name="submit" value="씁니다.">
							<input type="reset" value="취소합니다.">
						</center>
					</td>
				</tr>
			</table>
			<br><br><br>
			<?php 
				// 파일에서 1행씩 읽어 테이블에 세트해 갑니다.
				foreach($lines as $line) {
					$ln = explode("," , $line);
					echo "<table cellspacing=3 rules='rows' width='500'><tr>";
					echo "<th align='left'>[No. ".$ln[0]."] 이름 : ".$ln[1]."</th>";
					echo "<th align='right'>입력 날짜 : ".$ln[4]."</th>";
					echo "</tr><tr>";
					echo "<td align='left' colspan='2'>".$ln[2]."</td>";
					echo "</tr></table><br>";
				}
			?>
		</center>
	</form>
</body>
</html>