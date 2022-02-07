<?php
nombre(22,5);
function nombre ($nb,$colonne)
{
	$test=1;
	echo "<table>";
	while($test<$nb)
	{
		echo "<tr>";
		$col=0;
		while($col<$colonne)
		{
			echo "<td>".$test."</td>";
			if($test==$nb)	exit();
			$test++;
			$col++;
		}
		echo "</tr>";
	}
	echo "</table>";
}
?>
