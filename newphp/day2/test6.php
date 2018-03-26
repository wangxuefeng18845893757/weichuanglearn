<?php
	
	if(isset($_POST['sub'])){
		$arr=array();
		for ($i=1; $i <=5; $i++) { 
			echo "第".$i."注";
			$arr[$i]=array();
			for ($j=0; $j < 7; $j++) { 
				$num = rand(1, 30);
				if(in_array($num, $arr[$i])){
					$j--;
					continue;
				}else{
					$arr[$i][$j]=$num;
					if($j<6){
						echo $arr[$i][$j].",";
					}else{
						echo $arr[$i][$j];
					}
				}
			}
			echo "</br>";
		}
		
		
		
		
	}







?>
<meta charset="UTF-8">
<div>
	<caption><h3>福利彩票号码自动生成器</h3></caption>
	<form action="test6.php" method="post">
		<input type="submit" name="sub" value="单击生成新的号码" />
    </form>
    <div id='div1'><?php
	
	if(isset($_POST['sub'])){
		$arr=array();
		for ($i=1; $i <=5; $i++) { 
			echo "第".$i."注";
			$arr[$i]=array();
			for ($j=0; $j < 7; $j++) { 
				$num = rand(1, 30);
				if(in_array($num, $arr[$i])){
					$j--;
					continue;
				}else{
					$arr[$i][$j]=$num;
					if($j<6){
						echo $arr[$i][$j].",";
					}else{
						echo $arr[$i][$j];
					}
				}
			}
			echo "</br>";
		}
		
		
		
		
	}







?>
</div>
</div>
<style>
	div{
		background: #000;
		width: 500px;
		height:500px;
		margin: 0 auto;
	}
	h3{
		background:#ccc;
		color: #fff;
		text-align:center;
		padding: 10px 0;
	}
	input{
		display:block;
		width:200px;
		height:50px;
		margin:0 auto;
		color:red;
	}
	#div1{
		text-align:center;
		width:300px;
		height:300px;
		margin:0 auto;
		color: #fff;
	}
</style>

	