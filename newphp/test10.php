<?php
	for ($i=1; $i <=5; $i++) { 
		
		for ($m=5 ;$m >$i ; $m--) { 
			echo '&nbsp;';
		}
		for ($j=1; $j <=($i*2-1) ; $j++) { 
			echo "*";
		}
		echo "<br/>";
		
	}
	echo "<br/>";
	for ($i=1; $i <=5; $i++) { 
		
		for ($m=5 ;$m >$i ; $m--) { 
			echo '&nbsp;';
		}
		for ($j=1; $j <=($i*2-1) ; $j++) {
			 if (($i == 1) || ($i == 5)) {  
                    echo '*';  
                } else {  
                    if (($j == 1) || ($j == 2 * $i - 1)) {  
                        echo '*';  
                    } else {  
                        echo "&nbsp;";  
                    }  
                }  
			
			
		}
		echo "<br/>";
		
	}





?>