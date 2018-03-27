<?php
	include "conn.php";
	if(isset($_POST['sub'])){
		$uname=$_POST['uname'];
		$pass=$_POST['pass'];
		$mpass=md5($pass);
		
		$sql="select * from user where uname='$uname' and pass='$mpass'";
		$query=mysqli_query($link,$sql);
		$rs=mysqli_fetch_array($query);
		if($rs){
			setcookie('uid',$rs['uid']);
			setcookie('name',$rs['uname']);
			echo "<script>location='index.php'</script>";
		}
	}

?>

<meta charset="utf-8">
<form action="login.php" method="post">
	<div id="log">
		用户名:<input type="text" name="uname" id="uname"><br />
		密码:<input type="password" name="pass" id="pass"><br />
		<input type="submit" name="sub" value="登录" id="btn">	
	</div>

</form>
<style>
	#log{
		width: 400px;
		height:300px;
		background:#ccffff;
		position:absolute;
		top: 50%;
		left: 50%;
		margin-top: -150px;
		margin-left:-200px;
		text-align:center;
		color: green;
	}
	#uname,#pass{
		margin:50 50px; 
	}
	#btn{
		width:50px;
		height:20px;
		border-radius:5px;
		color: green;
		background: #ffffcc;
	}
	body{
		background: #ccccff;
	}
	
	
	
	
	
</style>