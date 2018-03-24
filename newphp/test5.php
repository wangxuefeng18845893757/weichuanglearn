<?php
	echo "<h3>输入分数查询成绩</h3>";
	if(isset($_POST['sub'])){
		$score=$_POST['score'];
		
		if($score<=100 && $score>=80){
			echo "<script>alert('您的成绩为优秀')</script>";
		}else if($score<80 && $score>=60){
			echo "<script>alert('您的成绩为合格')</script>";
		}else{
			echo "<script>alert('您的成绩为不合格')</script>";
		}
	}
	if(isset($_POST['reset'])){
		$_POST['score']='';
	}





?>
<meta charset='UTF-8'>
<form action="test5.php" method="post">
	分数：<input type="text" name="score"/>
	<input type="submit" value="提交查询" name="sub"/>
	<input type="reset" value="重置分数" name="reset"/>
</form>