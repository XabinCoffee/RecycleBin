<?php
session_start();

echo "lol";

$get = file_get_contents('galderak.xml');
$xml = simplexml_load_string($get);
$data = $xml->assessmentItem;

	
	
	echo "<table class='taula'>";
	echo "<tr>";
	echo "<th>Galdera</th>";
	echo "<th>Zailtasuna</th>";
	echo "<th>Gaia</th>";
	echo "<th>Erantzuna</th>";
	echo "</tr>";
	echo "</thead>";

	foreach ($data as $row){
		echo "<tr>";
		echo "<td>";
		echo $row->itemBody->p;
		echo "</td>";
		echo "<td>";
		echo $row['konplexutasuna'];
		echo "</td>";
		echo  "<td>";
		echo $row['subject'];
		echo "</td>";
		echo "<td>";
		echo $row->correctResponse->value;
		echo "</td>";
		echo "</tr>";
	 } 

	echo "</table>";
		
		


?>