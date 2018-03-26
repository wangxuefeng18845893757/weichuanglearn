<?php
	echo "<h3>2012年伦敦奥运会110米栏成绩单</h3>";
	echo "<p>110米栏决赛成绩</p>";
	$arr=array(
		array(1,3236,'阿里斯-梅里特','美国','1985年07月24日',6,12.92),
		array(2,3246,'杰森-理查森','美国','1986年04月04日',4,13.04),
		array(3,2182,'汉斯勒-帕切门特','牙买加','1990年06月17日',7,13.12),
		array(4,1804,'劳伦斯-克拉克','英国','1990年03月12日',2,13.39),
		array(5,1125,'瑞恩-布拉斯怀特','巴巴多斯','1988年06月06日',8,13.04),
		array(6,1477,'奥兰多-奥尔特加','古巴','1991年07月29日',9,13.43),
	);
	echo "<table width=800 align=center border=1>";
		echo "<tr>";
			echo "<td>";
				echo "排名";
			echo "</td>";
			echo "<td>";
				echo "号码";
			echo "</td>";
			echo "<td>";
				echo "姓名";
			echo "</td>";
			echo "<td>";
				echo "国籍";
			echo "</td>";
			echo "<td>";
				echo "生日";
			echo "</td>";
			echo "<td>";
				echo "跑道";
			echo "</td>";
			echo "<td>";
				echo "成绩";
			echo "</td>";
		echo "</tr>";
		for ($i=0; $i < count($arr); $i++) {
			if($i==0){
				$color= 'red';
			}else if($i==1){
				$color= 'yellow';
			}else if($i==2){
				$color= 'blue';
			}else{
				$color= 'gray';
			};
			echo "<tr bgColor=$color>"; 
				for ($j=0; $j <count($arr[$i]) ; $j++) { 
					echo "<td>";
						echo $arr[$i][$j];
					echo "</td>";
				}
			echo "</tr>";
		}
		
	echo "</table>";


?>
<style>
	h3{
		text-align: center;
	}
	p{
		text-align: center;
	}
	
	
	
	
</style>