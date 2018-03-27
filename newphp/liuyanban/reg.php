<?php
	include "conn.php";
	if(isset($_POST['sub'])){
		$uname=$_POST['uname'];
		$pass=$_POST['pass'];
		$sfile=$_FILES['sfile'];
		$hname=$uname.time();
		$houname=$sfile['name'];
		$houarr=explode('.',$houname);
		$len=count($houarr)-1;
		$zname=$houarr[$len];
		$dest='./upload/'.$hname.'.'.$zname;
		
		$e=move_uploaded_file($sfile['tmp_name'],$dest);
		if($e){
			$imgurl=substr($dest,1);
			echo $imgurl;
			die();
		}else{
			header('location:reg.php');
		}
		
		$mpass=md5($pass);
		$sql="select * from user where uname='$uname'";
		$query=mysqli_query($link,$sql);
		$rs=mysqli_fetch_array($query);
		if($rs){
			echo "<script>alert('用户名重名')</script>";
			echo "<script>location='reg.php'</script>";
		}else{
			$flag=true;
			$arr=array('%','=','&');
			for($i=0;$i<strlen($uname);$i++){
				for($j=0;$j<count($arr);$j++){
					if($uname[$i]==$arr[$j]){
						$flag=false;
					}
				}
			}
			
			if($flag==false){
				echo "<script>alert('非法字符')</script>";
				echo "<script>location='reg.php'</script>";
			}else{
				$sql="insert into user(uid,uname,pass,img) values(null,'$uname','$mpass','$imgurl')";
				$query=mysqli_query($link,$sql);
				if($query){
					
					header('location:login.php');
				}else{
					echo "<script>location='reg.php'</script>";
				}
			}
			
			
		}
		
	}

?>

<meta charset="utf-8">
<form action="reg.php" method="post" enctype="multipart/form-data">
	<div id="reg">
		用户名:<input type="text" name="uname" id="uname"><br />
		密码:<input type="password" name="pass" id="pass"><br />
		上传图片:<input type="file" name="sfile" id="sfile"><br />
		<input type="submit" name="sub" value="注册" id="btn">
	</div>
	
</form>
<style>
	#reg{
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
		margin:20 50px; 
	}
	#sfile{
		margin: 20px 10px;
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