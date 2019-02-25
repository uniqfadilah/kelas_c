<?php

	$kanguru1 = $a1. " ";
	$kanguru2 = $s2. " ";

	function kanguru($a1,$b1,$a2,$b2){

		$kelinci1 = $a1. " ";
		$kelinci2 = $s2. " ";

				echo "kanguru(".$a1.",".$b1.",".$a2.",".$b2.")";
				echo "<br>";

				for ($i=0; $i<4;$i++){

					$a1 += $b1;
					$a2 += $b2;
					@$kanguru1 = $a1. " ";
					@$kanguru2 = $a2. " ";
				}
				echo "kanguru1"."=".$kanguru1;
				echo "<br>";

				if ($a1==$aw2){

					echo "yes<br>";
				}

				else {
					echo "NO<br>";
				}
	}
	kanguru (0,3,4,2);
	kanguru (1,5,4,2);
?>