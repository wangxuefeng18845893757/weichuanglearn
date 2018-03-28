<base href="<?php echo site_url();?>">
<meta charset="UTF-8" />
<form action="blog/do_add" method="post">
	标题：<input type="text" name="title" /></br>
	内容：<textarea cols=20 rows=20 name="content"></textarea></br>
	<input type="submit" name="sub"  value="添加文章"/>
</form>