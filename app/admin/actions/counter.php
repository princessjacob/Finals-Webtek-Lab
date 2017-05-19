<?php
	$counter = ("../lib/counter.txt");
	$hits = file($counter);
	$hits[0]++;
	$fp = fopen($counter, "w");
	fputs($fp, "$hits[0]");
	fclose($fp);
?>