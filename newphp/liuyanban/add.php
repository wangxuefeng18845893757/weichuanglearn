<?php
	include 'conn.php';
	if(isset($_POST['sub'])){
		$title = $_POST['title'];
		$con = $_POST['con'];
		//拼接数据库识别的sql语句
 		$sql = "insert into blog (bid,title,content,time) value(null,'$title','$con',now())";
		//把sql语句发送给数据库
		$query = mysqli_query($link,$sql);
		if($query){
			echo "<script>location='index.php'</script>";
		}else{
			echo "error";
		}
		
	}







?>
<mate charset='UTF-8'>
<form action="add.php" method="post">
	<div id="add">
		标题：<input type="text" name="title" id="title"/></br>
		<span>内容：</span><textarea cols=20 rows=10 name="con" id="content"></textarea></br>
		<input type="submit" name="sub" value="添加文章" id="btn"/>
		
	</div>
	
	
</form>
<style>
	#add{
		
		color: #333333;
		position:relative;
		
	}
	span{
		position:absolute;
		top:50px;
		
	}
	#content{
		position:absolute;
		top:50px;
		left: 67px;
	}
	#title{
		margin: 20px 20px;
	}
	#btn{
		position:absolute;
		top:224px;
		left:100px;
	}
	
	
	
	
	
	
</style>