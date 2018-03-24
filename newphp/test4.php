<?php
	$str=file_get_contents('test.txt');
	echo $str;




?>
<meta charset='UTF-8'>
<form action="next.php" method="post">
	<input type="submit" value="同意注册" name="yes"/>
</form>
<form action="index.php" method="post">
	<input type="submit" value="我不同意" name="no"/>
</form>