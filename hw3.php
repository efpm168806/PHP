<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=UTF-8">
	<title></title>
</head>
<body>
<form action="hw3.php" method="post">
名字:<input type="text" name="input1"><br>
帳號:<input type="text" name="input2"><br>
密碼:<input type="password" name="input3"><br>
性別:<input type="radio" name="gender" value="男">男
<input type="radio" name="gender" value="女">女<br>
城市:<input type="text" name="input4"><br>
電話:<input type="text" name="input5"><br>
興趣:<br>
<input type="checkbox" name="mycheckbox" value="playball">play ball<br>
<input type="checkbox" name="mycheckbox" value="fight">fight<br>
<input type="checkbox" name="mycheckbox" value="run">run<br>
<input type="checkbox" name="mycheckbox" value="dance">dance<br>
<input type="checkbox" name="mycheckbox" value="sing">sing<br>
年級:<br>
<select name="list" mulitiple="false">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>	
</select>

<input type="submit">
</form>
<?php
$link = @mysqli_connect('localhost','root','','phphw');
if($link){
	echo "連接成功!!";
}
else{
	echo "連接失敗!!";
}
$uname=@$_POST["unput1"];
$aco=@$_POST["input2"];
$pwd=@$_POST["input3"];
$gender=@$_POST["gender"];
$city=@$_POST["input4"];
$phone=@$_POST["input5"];
$interest=@$_POST["mycheckbox"];
$list=@$_POST["list"];
$sql2="INSERT INTO hw0413 (name,aco,pwd,gender,city,phone,interest,list) VALUES ('$uname','$aco','$pwd','$gender','$city','$phone','$interest','$list')";
$result=mysqli_query($link,$sql2);
$result=mysqli_query($link,"SELECT * FROM hw0413");
echo "<table border=1>";
while($row=mysqli_fetch_assoc($result)){
	echo "<tr>";
	echo "<td>";
	echo $row["name"];
	echo "</td><td>";
	echo $row["aco"];
	echo "</td><td>";
	echo $row["pwd"];
	echo "</td><td>";
	echo $row["gender"];
	echo "</td><td>";
	echo $row["city"];
	echo "</td><td>";
	echo $row["phone"];
	echo "</td><td>";
	echo $row["interest"];
	echo "</td><td>";
	echo $row["list"];
	echo "</td>";
}
echo "<table>";
mysqli_close($link);
?>
</body>
</html>
