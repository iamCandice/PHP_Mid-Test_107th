<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登入資訊</title>
</head>
<body>
<script>
confirm("歡迎回來")
</script>
<tr>
	<td>您的上一次登入時間為</td>
	<td><?php echo $row_RecMember["m_logintime"];?></td>
</tr>

<tr>
	<td>您的登入次數為</td>
	<td><?php echo $row_RecMember["m_login"];?></td>
</tr>
<tr>
	<td>加入時間</td>
	<td><?php echo $row_RecMember["m_jointime"];?></td>
</tr>	
</body>
</html>