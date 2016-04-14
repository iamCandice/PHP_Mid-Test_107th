<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="all.css" >
	<title>登入</title>
	<?php
   	 session_start();
     unset($_SESSION["login"]);
   	 session_destroy();
  	?>  
</head>
<body>

	<div class="container_log">
	<form action="connect.php" method="post">
	<h1>登入</h1>
	<table class="table">
	<tr>
		<td>帳號</td>
		<td><input type="text"  name="login" required autofocus><br></td>
	</tr>
	<tr>
		<td>密碼</td>
		<td><input type="pwd" name="pwd" required><br></td>
	</tr>
	</table>
	<input type="submit" value="登入">
	<span ><a href="reg.php"><input type="button" value="註冊"></a></span>
	</form>
	</div>
</form>
</body>
</html>