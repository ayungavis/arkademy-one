<?php
	star(5);
	function star($n) {
		$result = null;	
		for ($y = $n; $y > 0; $y--) { // Looping baris
			//for ($x = y; $x <= $n-1; $x++) { // Looping kolom
				echo str_repeat('+', $y)."*<br/>";
				// $result .= '*';
				// $result .= '&nbsp&nbsp&nbsp&nbsp&nbsp';
			//}
			//echo '<br/>';
		}
		// echo $result;
	}
	/* terserah(3, 4);
	function terserah($x, $y) {

		for ($i = 1; $i <= $x*$y; $i++) { 
			if($i % 2 != 0) {
				echo 'a,';
			}
			else {
				echo $i.',';
			}
			if($i % $y == 0) {
				echo '<br/>';
			}

		}
	} */
?>