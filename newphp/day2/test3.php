<?php
	if(isset($_POST[sub])){
		$file = $_POST['myfile'];
		//echo $file;
		$arr = explode('.', $file);
		//print_r($arr) ;
		$len = count($arr)-1;
		$hou = $arr[$len];
		$arr2 = array('txt','pdf','exe');
		$flag = false;
		for ($i=0; $i < count($arr2); $i++) { 
			if($hou == $arr2[$i]){
				$flag = true; 
			}
		}
		if($flag == true ){
			echo "非法后缀名";
		}else{
			echo $hou;
		}
		
	}








?>
<meta charset='UTF-8'>
<p>检测文件名后缀</p>
<form action="test3.php" method="post">
	<input type="file" name="myfile">
	<input type="submit" name="sub" value="检测" />
	
</form>