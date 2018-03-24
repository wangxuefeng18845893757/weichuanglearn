<?php
	echo "<h3>使用for循环打印的99乘法表</h3>";
	echo "<br/>";
	echo "==========第一种99乘法表==========";
	echo "<br/>";
	echo "<table width=800 algin='center' border='1'>";
	for($i=1;$i<=9;$i++){
		echo "<tr>";
		for($j=1;$j<=$i;$j++){
			echo "<td>";
				echo "$i*$j=".$i*$j." ";
			echo "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
	echo "<br/>";
	echo "==========第二种99乘法表==========";
	echo "<br/>";
	echo "<table width=800 algin='center' border='1'>";
	for($i=9;$i>=1;$i--){
		echo "<tr>";
		for($j=1;$j<=$i;$j++){
			echo "<td>";
				echo "$i*$j=".$i*$j." ";
			echo "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
	echo "<br/>";
	echo "==========第三种99乘法表==========";
	echo "<br/>";
	echo "<table width=800 algin='center' border='1'>";
	for($i=9;$i>=1;$i--){
		echo "<tr>";
		for($j=1;$j<=9-$i;$j++){
			echo "<td>";
			echo "";
			echo "</td>";
		}
		for($m=1;$m<=$i;$m++){
		echo "<td>";
			echo "$i*$m=".$i*$m." ";
		echo "</td>";
	}
		echo "</tr>";
	}
	
	echo "</table>";
	echo "<br/>";
	echo "==========第四种99乘法表==========";
	echo "<br/>";
	echo "<table width=800 algin='center' border='1'>";
	for($i=1;$i<=9;$i++){
		echo "<tr>";
		for($j=1;$j<=9-$i;$j++){
			echo "<td>";
			echo "";
			echo "</td>";
		}
		for($m=1;$m<=$i;$m++){
		echo "<td>";
			echo "$i*$m=".$i*$m." ";
		echo "</td>";
	}
		echo "</tr>";
	}
	
	echo "</table>";
	



?>