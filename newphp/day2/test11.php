<?php
	echo "<h3>获取文件上传信息</h3>";
	echo "<p>获取文件上传信息</p>";
	
	if(isset($_POST['sub'])){
		$str = explode('/', $_FILES["file"]["type"]);
		//$myfile = $_POST['myfile'];
		$num = ceil($_FILES["file"]["size"]/1024);
		echo "上传文件信息：";
		echo "文件名：".$_FILES["file"]["name"]."</br>";
		echo "文件类型：".$str[count($str)-1]."</br>";
		echo "文件大小：".$num."KB"."</br>";
		
	}






?>
<meta charset="UTF-8">
<form action="test11.php" method="post" enctype="multipart/form-data">
	<input type="file" name="file" />
	</br>
	<input type="submit" name="sub" value="提交" />
	
	
	
</form>