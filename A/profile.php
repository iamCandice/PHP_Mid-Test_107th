<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>更新個人資料</title>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>
<?php
	$no = $_GET["no"];//網址傳來的參數
	//echo $no;

	include("connect.inc.php");
	
	//先讀取一筆資料
	$read = "SELECT * FROM log WHERE login = '$login'";
	$read_result = mysqli_query($link, $read);
	$row = mysqli_fetch_array($read_result);

?>
<body>
<div id="container">
	
    <div id="content_top"></div>
  <div id="content">
    <form action="update.query.php" method="post" name="table" autocomplete="off">
    <h1>更新資訊</h1>
    <table width="500" border="1"  bordercolor="#000000">
    	<tr>
    		<td>帳號</td>
    		<td>
    			<?php 
    				echo $row[0];
            echo "<input name='login' type='hidden' value='".$row[0]."'>";
    			?>
    		</td>
    	</tr>
  		<tr>
    		<td>密碼</td>
   			<td><?php echo "<input name='pwd' type='pwd' required autofocus value ='".$row[1]."''>"?></td>
  		</tr>
  		<tr>
    		<td>手機</td>
    		<td><?php echo "<input name='phone' type='tel' placeholder='0912345678' pattern='09[1-8][0-9]([\-|\s]?)[0-9]{3}\1[0-9]{3}'' required maxlength='12' value ='".$row[2]."'>"?></td>
  		</tr>
  		<tr>
    		<td>Email</td>
    		<td><?php echo "<input type='email' name='email' maxlength='120'  required value = '".$row[3]."'>"?></td>
  		</tr>
  		<tr>
    		<td colspan="2"><input type="reset" value="清除資料"><input type="submit" value="更新資料"></td>
    	</tr>
	</table>
	</form><br>
  	
    <input type="button" onclick="checkdel.php" value="刪除帳號">
    </div>
</div>
</body>
</html>