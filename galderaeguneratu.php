<?php

$id = $_GET['id'];
$galdera = $_GET['galdera'];
$erantzuna = $_GET['erantzuna'];
$konplexutasuna = $_GET['konplexutasuna'];
$gaia = $_GET['gaia'];

$get = file_get_contents('galderak.xml');
$xml = simplexml_load_string($get);
$data = $xml->assessmentItem;

$i=0;

foreach ($data as $row) {
	
	if($i==$id){
			$row['konplexutasuna'] = $konplexutasuna;
			$row['subject']=$gaia;
			$row->itemBody->p=$galdera;
			$row->correctResponse->value=$erantzuna;
			$xml->asXML("galderak.xml");
			$ID=$i;
			
	$galdera=$row->itemBody->p;
	$erantzuna=$row->correctResponse->value;
	$zailtasuna=$row['konplexutasuna'];
	$gaia=$row['subject'];


	echo 
	"
	<table class='taula' id = $ID> 
	<tr onClick='editatu($ID)'>
	<th>Galdera</th>
	<th>Erantzuna</th>
	<th>Konplexutasuna</th>
	<th>Gaia</th>
	</tr>
	</thead>
	
	<tr onClick='editatu($ID)'>
 <td> ".$galdera."</td>
 <td> ".$erantzuna."</td>
  <td> ".$zailtasuna."</td>
 <td> ".$gaia."</td>
 </tr>
 
 <br>";
	}

	
	$i++;
	
}


?>