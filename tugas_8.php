
<?php
echo "<table>";
		for($k = 0; $k < 9; $k++){
			echo "<td>";
			for ($x=0; $x <2 ; $x++) { 
			for( $y=10;$y>0;$y--){
				for($i=1; $i<=$y; $i++){
					echo "_";
				}
				for($y1=10;$y1>$y;$y1--){
					echo "x";
				}
				for($y2=10;$y2>$y;$y2--){
					echo "x";
				}
				echo "<br>";
			}

			for($t=0; $t<=10;$t++){
				for($j=1;$j<=$t;$j++){
					echo "_";
				}
				for($t1=10; $t1>$t;$t1--){
					echo "x";
				}
				for($t2=10; $t2>$t;$t2--){
					echo "x";
				}
				echo "<br>";
				}
			}
			echo "</td>";
		}
echo "</table>";
?>