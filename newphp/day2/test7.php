<?php
	date_default_timezone_set('Asia/Shanghai');
	$year=date(Y);
	$mouth=date(m);
	$day=date(d);
	$hour=date(H);
	$minute=date(i);
	$second=date(s);
	$str = $year.'-'.$mouth.'-'.$day.' '.$hour.':'.$minute.':'.$second;
	//echo "$str";
	$arr=array(
		'软件版本:'=>$_SERVER[SERVER_SIGNATURE],
		'端口:'=>$_SERVER[SERVER_PORT],
		'服务名:'=>$_SERVER[HTTP_HOST],
		'文档路径:'=>$_SERVER[DOCUMENT_ROOT],
		'文件路径:'=>$_SERVER[SCRIPT_FILENAME],
		'运行时间:'=>$str,
	
	);
	
	//echo $_SERVER[SERVER_SIGNATURE];
	//print_r($_SERVER);
	
	echo "<h3>查看服务器信息</h3>";
	echo "<p>显示当前脚本运行信息</p>";
	echo "<table width=800 align=center border=1>";
		
			
				foreach ($arr as $key => $value) {
					echo "<tr>";
						echo "<td>";
							echo "$key";
							
						echo "</td>";
						echo "<td>";
							
							echo "$arr[$key]";
						echo "</td>";
					echo "</tr>";
				}
			
		
	
	
	
	
	echo "</table>";





?>
<style>
	h3{
		text-align: center;
	}
	p{
		text-align:center;
	}
	
	
	
	
</style>