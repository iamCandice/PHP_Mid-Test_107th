<?php
	//接收來自admin.update.php更新的資料表單執行UPDATE query後返回admin.manage.php
	$pwd = $_POST["pwd"];
	$phone = $_POST["phone"];
  	$email = $_POST["email"];
  	
  	include("connect.inc.php");
  	$update = "UPDATE a SET pwd = '$pwd', phone = '$phone', email = '$email',  where login =".$login;
	mysqli_query($link, $update);
	//返回admin.manage.php並關掉MySQLi連結
	echo "<script>";
		echo "parent.location = 'index.php';";
	echo "</script>";
	mysqli_close($link); 
?>