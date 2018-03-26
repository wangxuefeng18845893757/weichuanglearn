<?php
	session_start();
?>
<?php
	echo "<h3>删除并返回数组中的最后一条信息</h3>";
	echo "<p>录入员工信息</p>";
	

?>
<meta charset="UTF-8">
<form action="test10.php" method="post">
	姓名：<input type="text" name="name" />
	<br/>
	年龄：<input type="text" name="age" />
	<br/>
	<input type="submit" name="sub" value="提交" />
	
	
	
</form>
<?php
	
	echo "<p>员工信息表</p>";
			
		echo "<table width=400 border=1>";
			echo "<tr>";
				echo "<td>";
					echo "编号";
				echo "</td>";
				echo "<td>";
					echo "姓名";
				echo "</td>";
				echo "<td>";
					echo "年龄";
				echo "</td>";
			echo "</tr>";
			if(isset($_POST['sub'])){
				$name=$_POST['name'];
				$age=$_POST['age'];
                $_SESSION['arr'][]=array($name,$age);
				//print_r($_SESSION['arr']);
			};
			if(isset($_POST['delete'])){
				array_pop($_SESSION['arr']);
			};
			if(isset($_SESSION['arr'])){
				foreach ($_SESSION['arr'] as $key => $value) {
					echo "<tr><td>".($key+1)."</td><td>".$value[0]."</td><td>".$value[1]."</td></tr>";
				};
			};	
				
			
			
		echo "</table>";
		
	


?>
<form action="test10.php" method="post">
	<input type="submit" name="delete" value="删除" />
	
</form>