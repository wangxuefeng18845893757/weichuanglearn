<?php
	if(isset($_GET['sub'])){
		$sjb=$_GET['sjb'];
		$num=rand(1, 3);
		//echo $num;
		
		switch ($sjb) {
		case '1':
			
			echo "<div>玩家出的石头</div>";
			break;
		case '2':
			
			echo "<div>玩家出的剪刀</div>";
			break;
		case '3':
			
			echo "<div>玩家出的布</div>";
			break;

	
	}
		switch ($num) {
			case '1':
				
				echo "<div>电脑出的石头</div>";
				break;
			case '2':
				
				echo "<div>电脑出的剪刀</div>";
				break;
			case '3':
				
				echo "<div>电脑出的布</div>";
				break;
		}
		if($sjb==$num){
			echo "<div>平局</div>";
		}else if($sjb>$num){
			if($sjb==3 && $num==1){
			    echo "<div>玩家拿下 First Blood</div>";
			}else{
				echo "<div>电脑拿下 First Blood</div>";
			}
				
		}else if($sjb<$num){
			if($sjb==1 && $num==3){
			    echo "<div>电脑拿下 First Blood</div>";
			}else{
				echo "<div>玩家拿下 First Blood</div>";
			}
			
		}
	};
	
	






?>
<meta charset='UTF-8'>
<form action="test11.php" method="get">
	你出拳：
	<select name="sjb">
		<option value="1" <?php echo $sjb=='1'?'selected':'';?>>石头</option>
		<option value="2" <?php echo $sjb=='2'?'selected':'';?>>剪刀</option>
		<option value="3" <?php echo $sjb=='3'?'selected':'';?>>布</option>
	</select>
	<input type="submit" name="sub" value="提交"/>
</form>
<style>
	div{
		color: #ff6700;
		text-align:center;
		background:pink;
		border:1px solid red;
		margin-bottom: 10px; 
	}
	
	
	
	
	
	
</style>
