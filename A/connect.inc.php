
<?php
	$hostname = "localhost";
	$username = "root";
	$userpwd = "19960302";
	$select_db = "a";
	$link = mysqli_connect($hostname, $username, $userpwd, $select_db);
	mysqli_query($link, "character set utf8");	
?> 