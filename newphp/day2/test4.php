<?php
	$arr = array(
		'02-11'=>'外地出差',
		'03-22'=>'生日快乐',
		'05-01'=>'玩一天',
	);
	$flag = false;
	$k = "";
	//print_r($arr);
	if(isset($_POST['sub'])){
		$date = $_POST['date'];
		$arr2 = explode('-', $date);
		if(count($arr2)==2){
			if($arr2[0]>=0&&$arr2[0]<=12){
				if($arr2[1]>=1&&$arr2[1]<=30){
					foreach ($arr as $key => $value) {
						if($key==$date){
							$flag=true;
							$k=$key;
						}	
					}
					if($flag==true){
							$v=$arr[$k];
							echo "<script>alert('".$k."日备忘：".$v."')</script>";
						}else{
							echo "<script>alert('无备忘')</script>";
						}
				}else{
					echo "<script>alert('不是有效的日期')</script>";
				}
			}else{
				echo "<script>alert('不是有效的月份')</script>";
			}
		}else{
			echo "<script>alert('输入的日期格式不正确')</script>";
		}
		
		
	}







?>
<meta charset="UTF-8">
<h3>单击查询当前日程</h3>
<p>输入查询日期：</p>
<form action="test4.php" method="post">
	
	<input type="text" name="date"/>
	<br />
	<input type="submit" name="sub" value="提交" />
	<input type="reset" name="reset" value="重置" />
	
	
	
</form>