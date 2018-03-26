<?php
	echo "<h3>根据商品上市年份排序</h3>";
	echo "<p>根据商品上市年份排序</p>";
	$arr = array('2012 Macbook Pro','2009 iMac','2011 Macbook Air','2007 iPad1');
	echo "<table width=800 align=center border=1>";
		echo "<tr>";
			echo "<td>";
				echo "商品顺序";
			echo "</td>";
			echo "<td>";
				echo "商品名称";
			echo "</td>";
		echo "</tr>";
		if(isset($_POST['sort'])){
			sort($arr , SORT_NATURAL  );
			foreach ($arr as $key=>$value) {
			echo "<tr>";
				echo "<td>";
					echo $key+1;			
				echo "</td>";
				echo "<td>";			
					echo $value;
				echo "</td>";
		    echo "</tr>";
			}
		}
		if(isset($_POST['rsort'])){
			rsort($arr , SORT_NATURAL  );
			foreach ($arr as $key=>$value) {
			echo "<tr>";
				echo "<td>";
					echo $key+1;			
				echo "</td>";
				echo "<td>";			
					echo $value;
				echo "</td>";
		    echo "</tr>";
			}
		}

	echo "</table>";




?>
<meta charset="UTF-8">
<form action="test8.php" method="post">
	<div>
		<input type="submit" name="sort" value="正序" />
		<input type="submit" name="rsort" value="反序" />
	</div>
	
</form>
<style>
	h3{
		text-align: center;
	}
	p{
		text-align: center;
	}
	div{
		margin-top:20px;
		text-align: center;
	}
	
	
	
	
	
</style>
