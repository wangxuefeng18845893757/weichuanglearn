<?php
	//1连接数据库
	$link = @mysqli_connect('localhost','root','') or die("数据库连接失败");
	
	
	
	//2选择数据库
	
	@mysqli_select_db($link,'liuyanban') or die('选择数据库失败');
	
	
	
	//3设置数据库传输编码

	mysqli_set_charset($link,'utf8');




?>