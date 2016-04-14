<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>註冊</title>
</head>

<body>
<?php
include("connect.inc.php");
mysqli_query($link, "character set utf8");
mysqli_query($link,"INSERT INTO log (login,pwd) VALUES ('$login','$pwd')");
mysqli_close($link);
?>
<form action="index.php" method="post">
<h1>註冊</h1>
<table width="500" border="0">
<tr>
	<td>帳號</td>
	<td><input type="text" name="login"required autofocus/></td>
</tr>
<tr>
	<td>密碼</td>
	<td><input type="text" name="pwd"required/></td>
</tr>
<tr>
   <td><label for="phone">手機(+886)</label></td>
   <td><input id="phone" name="phone" type="tel" placeholder="0912345678" pattern="09[1-8][0-9]([\-|\s]?)[0-9]{3}\1[0-9]{3}" maxlength="12" required></td>
</tr>
<tr>
   <td><label for="email">Email</label></td>
   <td><input name="email" type="email" required maxlength="120" placeholder="thanks@lot.friends" autocomplete="off" maxlength="30"></td>
  		</tr>
<tr>
<td>&nbsp;</td>
<td><input type="submit" name="button" value="送出" /></td>
</tr>
</table>

</form>
</body>
</html>

