<?php 
	$kangguru1 = "";
	$kangguru2 = "";
	function kangguru($x1, $v1, $x2, $v2) {
		echo "Kangguru (".$x1.",".$v1.",".$x2.",".$v2.")";
		echo "<br>";
		for ($i=0; $i < 4; $i++) { 
			$x1 += $v1; 
			$x2 += $v2;
			@$kangguru1.= $x1." ";
			@$kangguru2.= $x2." ";
		}
		echo "Kangguru1 = ".$kangguru1;
		echo "<br>";
		echo "Kangguru2 = ".$kangguru2;
		echo "<br>";
		if ($x1 == $x2) {
			echo "<b>Yes</b><br><br>";
		}
		else{
			echo "<b>No</b><br><br>";
		}
	}
	kangguru(0,3,4,2);
	kangguru(1,3,7,1);
	kangguru(1,2,5,1);
 ?>