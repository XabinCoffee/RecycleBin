<?php

$id = $_GET['id'];

$get = file_get_contents('galderak.xml');
$xml = simplexml_load_string($get);
$data = $xml->assessmentItem;

$i=0;

foreach ($data as $row){
	
	if ($i==$id){
	
	echo" <div class='form-style'>

<h1>Galdera editatu</h1>

<input type='text' id='galdera".$id."' name='galdera' value=". $row->itemBody->p ." />

<input type='text' id='erantzuna".$id."' name='erantzuna' value=". $row->correctResponse->value ." />

<input type='text' id='konplexutasuna".$id"' name='konplexutasuna' value=". $row['konplexutasuna'] ." />

<input type='text' id='gaia".$id."' name='gaia' value=". $row['subject'] ." />

<input type='button' name='eguneratu' value='Eguneratu' onClick='eguneratu(". $id .")' />";

	}
	
	$i++;
}

?>