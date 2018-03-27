<a href="index.php">回到主页</a>
<?php
	include 'conn.php';
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$sql = "update blog set hits=hits+1 where bid = $id";
		$query = mysqli_query($link,$sql);
		if($query){
			$sql = "select * from blog where bid = $id";
			$query = mysqli_query($link,$sql);
			$arr = mysqli_fetch_array($query);
		}
	}
	
	


?>
<h3>标题：<?php echo $arr['title'];?></h3>
<p>内容：<?php echo $arr['content'];?></p>
<p>日期：<?php echo $arr['time'];?></p>
<p>访问数：<?php echo $arr['hits'];?></p>
