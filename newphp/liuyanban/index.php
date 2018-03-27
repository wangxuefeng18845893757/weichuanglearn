<a href="add.php" id="add">添加文章</a>
<?php
	if(isset($_COOKIE['uid'])){
		$uid=$_COOKIE['uid'];
		echo "<div id='login'>";
		echo $_COOKIE['name']."已登录 ";
		echo "&nbsp;&nbsp;";
		echo "<a href='unlog.php?uid=$uid'>注销</a>";
		echo "</div>";
	}else{
		echo "<a href='login.php'>未登录</a>";
		
	}
?>
<form action="index.php" method="post">
	<div id="search">
		<input type="text" name="search" />
		<input type="submit" name="sub" value="搜索" />
	</div>
	
	
</form>
<?php
	include 'conn.php';
	if(isset($_POST['sub'])){
		$se = $_POST['search'];
		$sk = "title like '%".$se."%'";
	}else{
		$sk = 1; 
	};
	$sql = "select * from blog where $sk order by bid desc";
	$query = mysqli_query($link,$sql);
	while ($result=mysqli_fetch_array($query)) {
		

?>
	<h3><a href="all.php?id=<?php echo $result['bid'];?>">标题：<?php echo $result['title'];?></a></h3>
	<p>内容：<?php echo iconv_substr($result['content'], 0, 3);?>......</p>
	<p>日期：<?php echo $result['time'];?></p>
<?php

	}
	
?>
<style>
    body{
    	background: #66cccc;
    }
	a{
		text-decoration:none;
		color: #fff;
	}
	a:hover{
		color:#ccffcc;
	}
	#add{
		
	}
	#login{
		float:right;
		color: #fff;
	}
	#search{
		margin: 20px 0;
	}
	p{
		color:#ccffcc;
	
	}
	
	
	
	
</style>