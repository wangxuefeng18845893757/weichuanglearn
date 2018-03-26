<?php
	if(isset($_POST['sub'])){
		
		
		unset($_POST['sub']);
		
		$info = implode(',', $_POST);
		
		
		echo "$info";
	}








?>
<meta charset='UTF-8'>
<caption><h3>请输入标题内容和日期</h3></caption>
<form action="test2.php" method="post">
	新闻标题：<input type="text" name="title" /> </br>
	新闻内容：<input type="text" name="content" /> </br>
	新闻日期：<input type="text" name="newdate" /> </br>
	<input type="submit" name="sub" value="提交">
</form>