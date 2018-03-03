<?php
$rows = 100;
$cols = 100;
echo "<table border=5px>";
	for ($i =0; $i <= $rows; $i++){
		echo'<tr>';
		for ($j = 0; $j <= $cols; $j++) {
			if ($i==0 && $j==0) {
				echo '<td></td>';
			}
			else if ($i==0) {
				$r = 1;
				echo '<td bgcolor="#a4b8d8" width="25" align="center" color="white">' . $r*$j . '</td>';
			}
			else if ($j==0) {
				$c = 1;
				echo '<td bgcolor="#a4b8d8" width="25" align="center" color="white">' .$i*$c. '</td>';
			}
			else {
				echo '<td bgcolor="#a4b8d8" width="25" align="center" color="white">' .$i*$j. '</td>';
			}
		}
		echo '</tr>';
	}
echo"</table>";
?>
