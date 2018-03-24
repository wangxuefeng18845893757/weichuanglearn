<?php
	for($i=1;$i<=9;$i++){
		for($j=1;$j<=$i;$j++){
			if($j==9){
				break;
			}
			echo "$i*$j=".$i*$j." ";
			
		}
		echo "<br/>";
	}
	echo "<br/>";
	for($i=1;$i<=9;$i++){
		for($j=1;$j<=$i;$j++){
			if($j>=3){
				break;
			}
			echo "$i*$j=".$i*$j." ";
			
		}
		echo "<br/>";
	}
	echo "<br/>";
	for($i=1;$i<=9;$i++){
		if($i>3){
			continue;
		}
		for($j=1;$j<=$i;$j++){
			if($j==3){
				break;
			}
			echo "$i*$j=".$i*$j." ";
			
		}
		echo "<br/>";
	}






?>