<?php
	echo "<h3>随机输出5个随机数</h3>";
	$count=0;
	while ($count<5) {
		$arr[]=rand(0, 9);
		$arr1=array_unique($arr);
		$count=count($arr1);
	}
	//print_r($arr);
	foreach ($arr1 as $value) {
		$str.= $value.'   ';
	}
	echo '随机数:'.$str;
	echo "<p>范围0~9且不重复</p>";






?>
<style>
	p{
		color: red;
	}
</style>