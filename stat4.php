<?php

	//Statistic typ BROWSER
	$tmp = file("stat.txt");  
	$ber = array();
	
	foreach (array_reverse($tmp) as $key) {
		$fof = explode(">", $key);
	    $gor = (string)$fof[5];
	    array_push($ber, $gor);
	}
	echo "<div class='third2'>STATISTICS BROWSER</div><br>";	
	$ste = array_count_values($ber);
	foreach ($ste as $key => $val) {
			echo "<div class='third2'>".$val."</div><div class='third2'>".$key."</div><br>";
	}

	fclose($f);
	
?>
