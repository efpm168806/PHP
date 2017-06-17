<?php
	$number=$_POST["number"];
	echo "上傳的檔案數量為:".$number."個<br>";
	echo '<form action="" method="post" enctype="multipart/form-data"><br>';
	for ($i=0;$i<$number;$i++) {
		echo '<input type="file" name="upload[]">'."<br>";			
	}
	echo '<input type="submit" name="upload "value="上傳"><br>';
	echo '</form>';
	$number=$_GET["number"];
	if(isset($_FILES["upload"])){
		for($i=0;$i<$number;$i++){
			$name=$_FILES["upload"]["name"][$i];
			$tmp=$_FILES["upload"]["tmp_name"][$i];
			if(!empty($name)){
				copy($tmp,$name);
				echo "上傳成功<br>";
			}else{
				echo "上傳失敗";
			}
		}
	}
?>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<form action="hw4.php" method="post">
		請選擇想要上傳檔案數量:
		<select name="number">
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
		<option value="13">13</option>
		<option value="14">14</option>
		<option value="15">15</option>
		<option value="16">16</option>
		<option value="17">17</option>
		<option value="18">18</option>
		<option value="19">19</option>
		<option value="20">20</option>
		</select><br>
		<input type="submit">
	</form>
	
</body>
</html>
