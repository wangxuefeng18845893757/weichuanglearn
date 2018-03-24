<?php
	echo "<h3>输入行列生成表格</h3>";
	if(isset($_POST['sub'])){
		$row=$_POST['row'];
		$col=$_POST['col'];
		echo "<div>";
		echo "<h4>用户动态输出表格。行.$row.列.$col</h4>";
		echo "<table width=300 align=center border=1>";
			for($i=0;$i<$row;$i++){
				if($i%2==0){
					$color='blue';
				}else{
					$color='red';
				}
				echo "<tr bgColor=$color>";
				for ($j=0; $j <$col ; $j++) { 
					echo "<td>";
					echo $j;
					echo "</td>";
				}
				echo "</tr>";
			}
		echo "</table>";
		echo "</div>";
	}
	
	if(isset($_POST['reset'])){
		$_POST['row']='';
		$_POST['col']='';
	}
	






?>
<meta charset='UTF-8'>
<form action="test6.php" method="post">
	输入行：<input type="text" name="row"/>
	输入列：<input type="text" name="col"/>
	<input type="submit" value="生成表格" name="sub"/>
	<input type="reset" value="重置行列" name="reset"/>
</form>
<style>
    div{
    	position:absolute;
    	bottom: 50px;
    	right:50px;
    }
	table{
		margin:0	
	}
	h4{
		
		text-align: center;
	}
</style>