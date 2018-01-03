<?php
	//Вывод всех данных лог-файла от последнего
	//Output of all log-file data from the last
	$tmp = file("stat.txt");  
	$scet = 1;
	foreach (array_reverse($tmp) as $key) {
		$fof = explode(">", $key);
	    echo "<div class='third2'>".$scet."</div>"."<div class='third2'>".$fof[0]."</div>".
	    "<div class='third2'>".$fof[1]."</div>".
	    "<div class='third2'>".$fof[2]."</div>"."<div class='third2'>".$fof[3]."</div>".
	    "<div class='third2'>".$fof[4]."</div>"."<div class='third2'>".$fof[5]."</div><br><br>";
	    $scet++;
	}
	fclose($f);


