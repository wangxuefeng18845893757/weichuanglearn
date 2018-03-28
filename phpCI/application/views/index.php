<base href="<?php echo site_url();?>">
<?php
	if(!$this->session->userdata('uid')){
		echo "<a href='user/login'>未登录</a>";
	}else{
		echo $this->session->userdata('uname')."已登录";
		echo "<a href='user/unlogin'>注销</a>";
		echo "<a href='blog/all'>个人中心</a>";
	}
	
	




?>
<?php
	foreach ($blogs as $value) {
		
	

?>
<h3>标题：<?php echo $value->title?></h3>
<li>时间：<?php echo $value->time?></li>
<p>内容：<?php echo $value->content?></p>
<?php
	}
?>
<meta charset="UTF-8" />
<form action="blog/search" method="post">
	<input type="text" name="search_info" />
	<input type="submit" name="sub" />
	
</form>





