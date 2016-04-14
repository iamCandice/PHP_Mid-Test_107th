<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登入</title>
</head>

<body>
<?php
session_start(); 
if(isset($_POST["login"]) && isset($_POST["pwd"])){
//連接資料庫
include("connect.inc.php");
$login = $_POST['login'];
$pwd = $_POST['pwd'];

//搜尋資料庫資料
$sql = "SELECT * FROM log WHERE	login = '$login'";
$result = mysqli_query($link,$sql);
$row = @mysqli_fetch_row($result);
mysqli_close($link);

//判斷帳號與密碼是否為空白
//以及MySQL資料庫裡是否有這個會員
if($user != null && $userpwd != null && $row[0] == $login && $row[1] == $pwd)
{
        //將帳號寫入session，方便驗證使用者身份
        $_SESSION["login"] = $login;
        echo '登入成功!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
}
else
{
        echo '帳號或密碼有誤';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=log.php>';
}
}
?>	
</body>
</html>
